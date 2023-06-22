<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ShippingMethods_ApplyTo
 *
 * @property int $SMAT_ID
 * @property int $ShippingMethodID
 * @property int $Country_ID
 * @property int $State_ID
 * @property \DateTime $LastModified
 
 */
class ShippingMethods_ApplyTo extends Model{

    protected $table = "ShippingMethods_ApplyTo";
    protected $primaryKey = "SMAT_ID";

    // Your relationships...

}
