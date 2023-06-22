<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ShippingMethods_DoNotApplyTo
 *
 * @property int $SMDNAT_ID
 * @property int $ShippingMethodID
 * @property int $Country_ID
 * @property int $State_ID
 * @property \DateTime $LastModified
 
 */
class ShippingMethods_DoNotApplyTo extends Model{

    protected $table = "ShippingMethods_DoNotApplyTo";
    protected $primaryKey = "SMDNAT_ID";

    // Your relationships...

}
