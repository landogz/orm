<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Cart
 *
 * @property int $ID
 * @property string $CartProductCode
 * @property int $CartItemQuantity
 * @property string $CartOptionIDs
 * @property string $CartGiftWrap
 * @property string $CartGiftWrapNote
 * @property \DateTime $LastModified
 * @property float $CartProductPrice
 * @property string $CartCouponCodes
 * @property float $CartRecurringPrice
 * @property int $CartRecurringHowOften
 * @property int $CartRecurringDuration
 * @property int $CartID_Number
 
 */
class Cart extends Model{

    protected $table = "Cart";
    protected $primaryKey = "ID";

    // Your relationships...

}
