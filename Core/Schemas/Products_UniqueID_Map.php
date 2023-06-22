<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Products_UniqueID_Map
 *
 * @property int $ProductID
 * @property string $ProductCode
 
 */
class Products_UniqueID_Map extends Model{

    protected $table = "Products_UniqueID_Map";
    protected $primaryKey = "ProductID";

    // Your relationships...

}
