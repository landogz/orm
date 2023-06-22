<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\TableInfo
 *
 * @property string $Table_Name
 * @property string $Column_Name
 * @property string $Data_Type
 * @property int $Character_Maximum_Length
 * @property string $Must_Be_Unique
 * @property string $Is_Primary_Key
 
 */
class TableInfo extends Model{

    protected $table = "TableInfo";
    protected $primaryKey = null;

    // Your relationships...

}
