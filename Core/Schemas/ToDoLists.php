<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ToDoLists
 *
 * @property int $ID
 * @property int $CustomerID
 * @property string $Title
 * @property int $SortOrder
 * @property string $Completed
 * @property string $Deleted
 
 */
class ToDoLists extends Model{

    protected $table = "ToDoLists";
    protected $primaryKey = "ID";

    // Your relationships...

}
