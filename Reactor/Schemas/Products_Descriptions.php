<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Products_Descriptions
 *
 * @property int $ProductID
 * @property mixed $ProductDescriptionShort
 * @property mixed $ProductDescription
 
 */
class Products_Descriptions extends Model{

    protected $table = "Products_Descriptions";
    protected $primaryKey = null;

    // Your relationships...

}
