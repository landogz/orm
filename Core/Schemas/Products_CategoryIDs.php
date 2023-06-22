<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Products_CategoryIDs
 *
 * @property int $ProductID
 * @property string $CategoryIDs
 
 */
class Products_CategoryIDs extends Model{

    protected $table = "Products_CategoryIDs";
    protected $primaryKey = null;

    // Your relationships...

}
