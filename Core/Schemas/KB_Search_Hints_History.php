<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\KB_Search_Hints_History
 *
 * @property int $ID_KB_Search_Hints_History
 * @property string $Hint
 * @property string $IPAddress
 * @property mixed $LastModified
 
 */
class KB_Search_Hints_History extends Model{

    protected $table = "KB_Search_Hints_History";
    protected $primaryKey = "ID_KB_Search_Hints_History";

    // Your relationships...

}
