<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Product_Tags
 *
 * @property string $Tag
 * @property int $ProductID
 * @property int $Relevance
 
 */
class Product_Tags extends Model{

    protected $table = "Product_Tags";
    protected $primaryKey = null;

    // Your relationships...

}
