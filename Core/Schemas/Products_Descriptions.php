<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Products_Descriptions
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
