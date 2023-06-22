<?php
require __DIR__ . '/vendor/autoload.php';

use Core\Database\Capsule\Manager as Capsule;


function regenerateSchemas()
{
    $dataTypes = [
        "gint" => "string",
        "binary" => "string",
        "bit" => "int",
        "char" => "string",
        "decimal" => "double",
        "float" => "float",
        "image5" => "string",
        "int" => "int",
        "money" => "float",
        "nchar" => "string",
        "numeric" => "float",
        "nvarchar" => "string",
        "real" => "float",
        "smalldatetime" => "\DateTime",
        "smallint" => "int",
        "smallmoney" => "float",
        "sql_variant7" => "string",
        "timestamp" => "int",
        "tinyint" => "int",
        "varchar" => "string",
        "xml" => "string",
        "uniqueidentifier" => "int"
    ];

    try {
        $config = [
            'store_url' => 'http://fsadx.hqmfs.servertrust.com',
            'api_user' => 'erdem@optimum7.com',
            'encrypted_key' => '7CDFF1C911E49F57A90477E0FA5F62CD9E96ACFE4283CF9117C12F599F3CA46A',
        ];
        $reactor = new Core();
        $reactor::init($config);
    } catch (Exception $e) {
        dd($e);
    }

    set_time_limit(0);
    $stub = file_get_contents(__DIR__ . '/stubs/Model.stub');
    $stubFileTypes = file_get_contents(__DIR__ . '/stubs/ColumnTypes.stub');
    $stubFileTypesFile = fopen(__DIR__ . '/Core/Database/ColumnTypes.php', 'w') or die("Unable to open file!");

    $tables = Capsule::statement('select TABLE_NAME from INFORMATION_SCHEMA.TABLES');
    $fileTypeString = [];

    foreach ($tables as $table) {
        $schemaFile = fopen(__DIR__ . '/Core/Schemas/' . $table['TABLE_NAME'] . '.php', 'w') or die("Unable to open file!");
        $tmpStub = $stub;
        $columns = Capsule::statement("EXEC sp_columns '" . $table['TABLE_NAME'] . "'");
        $tmpStub = str_replace('@ModelName', $table['TABLE_NAME'], $tmpStub);

        $columnString = '';

        foreach ($columns as $column) {
            if (strpos($column['TYPE_NAME'], 'identity') !== FALSE) {
                $tmpStub = str_replace('@id', '"' . $column['COLUMN_NAME'] . '"', $tmpStub);
            } else {
                $tmpStub = str_replace('@id', 'null', $tmpStub);
            }

            $cn = trim(str_replace('identity', '', $column['TYPE_NAME']));
            $type = array_key_exists($cn, $dataTypes) ? $dataTypes[$cn] : 'mixed';
            $columnString .= "* " . '@property ' . $type . ' $' . $column['COLUMN_NAME'] . "\n ";

            $fileTypeString[$column['COLUMN_NAME']] = "'" . $column['COLUMN_NAME'] . "'" . " => '$type',";
        }

        $tmpStub = str_replace('@properties', $columnString, $tmpStub);
        fwrite($schemaFile, $tmpStub);
        fclose($schemaFile);
        echo 'Schema: ' . $table['TABLE_NAME'] . '.php is created<br>' . "\n";
    }

    $fileStub = str_replace('@types', join("\n", $fileTypeString), $stubFileTypes);
    fwrite($stubFileTypesFile, $fileStub);
    fclose($stubFileTypesFile);
}

regenerateSchemas();