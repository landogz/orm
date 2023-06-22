<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Import_Exports
 *
 * @property int $ID_tbl_Import_Exports
 * @property string $Name
 * @property string $Description
 * @property int $SortOrder
 
 */
class tbl_Import_Exports extends Model{

    protected $table = "tbl_Import_Exports";
    protected $primaryKey = "ID_tbl_Import_Exports";

    // Your relationships...

}
