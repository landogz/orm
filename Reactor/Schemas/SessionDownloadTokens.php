<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\SessionDownloadTokens
 *
 * @property int $SessionDownloadTokenID
 * @property int $CustomerID
 * @property int $OrderDetailID
 * @property mixed $CreateDate
 * @property int $DownloadToken
 * @property int $QueryExpiringToken
 * @property string $DataFileName
 * @property string $DisplayName
 
 */
class SessionDownloadTokens extends Model{

    protected $table = "SessionDownloadTokens";
    protected $primaryKey = "SessionDownloadTokenID";

    // Your relationships...

}
