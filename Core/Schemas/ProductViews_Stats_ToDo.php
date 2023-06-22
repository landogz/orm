<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ProductViews_Stats_ToDo
 *
 * @property int $ID
 * @property int $ProductID
 * @property \DateTime $LastModified
 
 */
class ProductViews_Stats_ToDo extends Model{

    protected $table = "ProductViews_Stats_ToDo";
    protected $primaryKey = "ID";

    // Your relationships...

}
