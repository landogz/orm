<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ShippingMethods
 *
 * @property int $ShippingMethodID
 * @property string $Gateway
 * @property string $ShippingMethodName
 * @property string $ServiceCode
 * @property string $ShippingOrderBy
 * @property string $System
 * @property string $ShippingMethodActive
 * @property \DateTime $LastModified
 * @property float $BaseRate
 * @property float $CostPerPound
 * @property string $ApplyToAll
 * @property float $MinOrderPrice
 * @property float $MaxOrderPrice
 * @property int $LastModBy
 * @property float $ExtraShippingCost
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
