<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Log_EDI_Usage
 *
 * @property \DateTime $RunDate
 * @property string $EDI_Name
 * @property int $Usage_Count
 * @property int $Row_Count
 
 */
class tbl_Log_EDI_Usage extends Model{

    protected $table = "tbl_Log_EDI_Usage";
    protected $primaryKey = null;

    // Your relationships...

}
