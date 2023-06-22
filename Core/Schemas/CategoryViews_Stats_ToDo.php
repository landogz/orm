<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CategoryViews_Stats_ToDo
 *
 * @property int $ID
 * @property int $CategoryID
 * @property \DateTime $LastModified
 
 */
class CategoryViews_Stats_ToDo extends Model{

    protected $table = "CategoryViews_Stats_ToDo";
    protected $primaryKey = "ID";

    // Your relationships...

}
