<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Export_Log_SQL
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
