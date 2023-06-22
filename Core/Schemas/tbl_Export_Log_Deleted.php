<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Export_Log_Deleted
 *
 * @property int $ID
 * @property int $MapID
 * @property int $FieldToLog
 * @property \DateTime $ExportDateTime
 * @property \DateTime $SQLBeginDateRange
 * @property \DateTime $SQLEndDateRange
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class tbl_Export_Log_Deleted extends Model{

    protected $table = "tbl_Export_Log_Deleted";
    protected $primaryKey = null;

    // Your relationships...

}
