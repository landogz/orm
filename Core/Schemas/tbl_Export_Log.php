<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Export_Log
 *
 * @property int $ID_tbl_Export_Log
 * @property int $ID_tbl_Import_Export_Steps
 * @property int $ID_Log
 * @property \DateTime $ExportDateTime
 * @property \DateTime $ResetDate
 * @property int $ResetBy
 
 */
class tbl_Export_Log extends Model{

    protected $table = "tbl_Export_Log";
    protected $primaryKey = "ID_tbl_Export_Log";

    // Your relationships...

}
