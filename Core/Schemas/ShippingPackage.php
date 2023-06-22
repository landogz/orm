<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ShippingPackage
 *
 * @property int $ID_ShippingPackage
 * @property string $ShipID
 * @property string $PackageTypeName
 * @property string $PackageTypeCode
 
 */
class ShippingPackage extends Model{

    protected $table = "ShippingPackage";
    protected $primaryKey = "ID_ShippingPackage";

    // Your relationships...

}
