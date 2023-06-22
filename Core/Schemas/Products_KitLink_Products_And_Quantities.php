<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Products_KitLink_Products_And_Quantities
 *
 * @property string $ProductCode
 * @property string $KitLinkProductCodesAndQuantities
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Products_KitLink_Products_And_Quantities extends Model{

    protected $table = "Products_KitLink_Products_And_Quantities";
    protected $primaryKey = null;

    // Your relationships...

}
