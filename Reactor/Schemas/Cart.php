<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Cart
 *
 * @property int $ID
 * @property string $CartProductCode
 * @property int $CartItemQuantity
 * @property string $CartOptionIDs
 * @property string $CartGiftWrap
 * @property string $CartGiftWrapNote
 * @property \DateTime $LastModified
 * @property string $CartProductPrice
 * @property string $CartCouponCodes
 * @property string $CartRecurringPrice
 * @property int $CartRecurringHowOften
 * @property int $CartRecurringDuration
 * @property int $CartID_Number
 
 */
class Cart extends Model{

    protected $table = "Cart";
    protected $primaryKey = "ID";

    // Your relationships...

}
