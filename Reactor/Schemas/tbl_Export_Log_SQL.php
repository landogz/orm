<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\tbl_Export_Log_SQL
 *
 * @property int $ID
 * @property int $MapID
 * @property \DateTime $Exec_Date
 * @property string $Exec_SQL
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class tbl_Export_Log_SQL extends Model{

    protected $table = "tbl_Export_Log_SQL";
    protected $primaryKey = "ID";

    // Your relationships...

}
