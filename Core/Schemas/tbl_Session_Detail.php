<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Session_Detail
 *
 * @property int $ID
 * @property int $SessionID
 * @property string $Name
 * @property int $Row_Size
 * @property int $Row_Index
 * @property int $Col_Size
 * @property int $Col_Index
 * @property mixed $Value
 
 */
class tbl_Session_Detail extends Model{

    protected $table = "tbl_Session_Detail";
    protected $primaryKey = "ID";

    // Your relationships...

}
