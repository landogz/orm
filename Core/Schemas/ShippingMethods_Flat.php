<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ShippingMethods_Flat
 *
 * @property int $ID_ShippingMethods_Flat
 * @property string $Name
 * @property string $ApplyTo_States
 * @property float $Cost_Base_Rate
 * @property float $Cost_Per_Pound
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class ShippingMethods_Flat extends Model{

    protected $table = "ShippingMethods_Flat";
    protected $primaryKey = "ID_ShippingMethods_Flat";

    // Your relationships...

}
