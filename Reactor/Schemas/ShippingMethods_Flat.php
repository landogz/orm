<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ShippingMethods_Flat
 *
 * @property int $ID_ShippingMethods_Flat
 * @property string $Name
 * @property string $ApplyTo_States
 * @property string $Cost_Base_Rate
 * @property string $Cost_Per_Pound
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class ShippingMethods_Flat extends Model{

    protected $table = "ShippingMethods_Flat";
    protected $primaryKey = "ID_ShippingMethods_Flat";

    // Your relationships...

}
