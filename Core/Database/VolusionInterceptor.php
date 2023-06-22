<?php

namespace Core\Database;

use Core\Database\XMLParser;
use GuzzleHttp\Client;
use DateTimeInterface;
use Illuminate\Support\Arr;

class VolusionInterceptor
{
    protected $query;
    protected $params;
    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function prepare($query)
    {
        $this->query = $query;
    }

    public function bindParams($bindings)
    {
        $binders = $this->prepareBindings($bindings);
        foreach ($bindings as $k => $v) {
            switch (gettype($v)) {
                case 'float':
                case 'double':
                    $binders[$k] = str_replace(',', '.', (string)$v);
                    break;
                case 'integer':
                    $binders[$k] = (string)$v;
                    break;
                case 'array':
                case 'string':
                    $binders[$k] = "'" . $this->msSQLEscapeReplicate($v) . "'";
                    break;
            }
        }
        $this->query = vsprintf(str_replace("?", "%s", $this->query), $binders);
    }

    public function prepareBindings(array $bindings)
    {
        foreach ($bindings as $key => $value) {
            // We need to transform all instances of DateTimeInterface into the actual
            // date string. Each query grammar maintains its own date string format
            // so we'll just ask the grammar for the format to get from the date.
            if ($value instanceof DateTimeInterface) {
                $bindings[$key] = $value->format($this->grammar->getDateFormat());
            } elseif (is_bool($value)) {
                $bindings[$key] = (int)$value;
            }
        }

        return $bindings;
    }

    public function execute()
    {
        $client = new Client();
        $url = sprintf(
            '%s/v/vspfiles/schema/Generic/%s',
            $this->connection->getConfig('store_url'),
            $this->connection->getConfig('file')
        );
        $r = $client->request('POST', $url, [
            'form_params' => [
                'query' => base64_encode($this->query),
                'api_user' => $this->connection->getConfig('api_user'),
                'api_key' => $this->connection->getConfig('encrypted_key'),
                'forceRequest' => $this->connection->getForceRequest()
            ]
        ]);

        if ($r->getStatusCode() == 200) {
            $result = $r->getBody()->getContents();
            if (!$this->connection->getForceRequest())
                return $this->XMLConverter($result);


            $fileName = trim($result);
            $url = sprintf(
                '%s/net/WebService.aspx?Login=%s&EncryptedPassword=%s&EDI_Name=Generic\\%s',
                $this->connection->getConfig('store_url'),
                $this->connection->getConfig('api_user'),
                $this->connection->getConfig('encrypted_key'),
                $fileName
            );
            $r = $client->request('GET', $url);

            if ($r->getStatusCode() == 200){
                return $this->XMLConverter($r->getBody()->getContents());
            }
        }

        throw new \Exception('No connection to be made to Volusion server');
    }

    /**
     * @param string $xml
     * @return array|null|string
     * @throws \Exception
     */
    private function XMLConverter(string $xml)
    {
        $x = new XMLParser();
        try {
            $result = $x->parse($xml);
        } catch (\Exception $e) {
            throw new \Exception('XML Parsing error, please see XML Parsing | Connection.php#104');
        }

        if (isset($result['Success']) && $result['Success'] === 'False') {
            throw new \Exception($result['Message']);
        }

        $result = $result['Table'];
        if (!is_array(current($result)))
            $result = [$result];

        return $result;
    }

    private function msSQLEscapeReplicate($string)
    {
        if (is_array($string))
            return array_map(__METHOD__, $string);
        if (!empty($string) && is_string($string)) {
            return str_replace(
                ['\\', "\0", "\n", "\r", "'", "\x1a"],
                ['\\\\', '\\0', '', '', "''", '\\Z'], $string);
        }
        return $string;
    }

}