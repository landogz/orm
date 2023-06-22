<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Products_UniqueID_Map
 *
 * @property int $ProductID
 * @property string $ProductCode
 
 */
class Products_UniqueID_Map extends Model{

    protected $table = "Products_UniqueID_Map";
    protected $primaryKey = "ProductID";

    // Your relationships...

}
