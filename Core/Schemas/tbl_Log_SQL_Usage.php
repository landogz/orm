<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Log_SQL_Usage
 *
 * @property int $ID_tbl_Log_SQL_Usage
 * @property mixed $Run_Date
 * @property int $Duration_in_Milliseconds
 * @property int $Row_Count
 * @property int $Column_Count
 * @property mixed $Total_Bytes
 * @property mixed $LastModified
 
 */
class tbl_Log_SQL_Usage extends Model{

    protected $table = "tbl_Log_SQL_Usage";
    protected $primaryKey = "ID_tbl_Log_SQL_Usage";

    // Your relationships...

}
