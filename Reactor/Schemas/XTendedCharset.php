<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\XTendedCharset
 *
 * @property int $XTendedCharsetID
 * @property string $Config_FullStoreURL
 * @property string $Config_CharacterSet
 * @property string $Config_StoreVersion
 * @property string $TableSchema
 * @property string $TableName
 * @property string $ColumnName
 * @property mixed $ColumnValue
 * @property int $XTendedCharASCII
 
 */
class XTendedCharset extends Model{

    protected $table = "XTendedCharset";
    protected $primaryKey = "XTendedCharsetID";

    // Your relationships...

}
