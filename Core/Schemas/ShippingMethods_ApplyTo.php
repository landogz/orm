<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ShippingMethods_ApplyTo
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
