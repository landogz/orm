<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Discounts
 *
 * @property int $DiscountAutoID
 * @property string $Name
 * @property int $MinQty
 * @property int $MaxQty
 * @property string $DiscountType
 * @property float $DiscountValue
 * @property \DateTime $LastModified
 * @property string $Span
 * @property \DateTime $BeginDate
 * @property \DateTime $EndDate
 * @property string $MinOrderPrice
 * @property string $MaxOrderPrice
 * @property string $Apply_To_All_Orders
 * @property int $LastModBy
 * @property string $CouponCode
 * @property string $OneTimeUse
 * @property string $Cannot_Use_With_Any_Other
 * @property int $Taxable_DiscountAfterTax
 * @property string $CouponUsage
 * @property string $Internal_Notes
 
 */
class Discounts extends Model{

    protected $table = "Discounts";
    protected $primaryKey = "DiscountAutoID";

    // Your relationships...

}
