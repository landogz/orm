<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ShippingMethods
 *
 * @property int $ShippingMethodID
 * @property string $Gateway
 * @property string $ShippingMethodName
 * @property string $ServiceCode
 * @property string $ShippingOrderBy
 * @property string $System
 * @property string $ShippingMethodActive
 * @property \DateTime $LastModified
 * @property string $BaseRate
 * @property string $CostPerPound
 * @property string $ApplyToAll
 * @property string $MinOrderPrice
 * @property string $MaxOrderPrice
 * @property int $LastModBy
 * @property string $ExtraShippingCost
 * @property float $ExtraShippingCost_Percent
 * @property float $MinOrderWeight
 * @property float $MaxOrderWeight
 * @property string $ApplyWhenZeroCost
 * @property string $Display
 * @property int $EstimatedDaysInTransit
 
 */
class ShippingMethods extends Model{

    protected $table = "ShippingMethods";
    protected $primaryKey = null;

    // Your relationships...

}
