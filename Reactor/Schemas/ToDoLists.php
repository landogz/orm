<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ToDoLists
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
