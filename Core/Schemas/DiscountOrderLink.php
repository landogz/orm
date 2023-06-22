<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\DiscountOrderLink
 *
 * @property int $DiscountAutoID
 * @property int $OrderID
 * @property string $GiftCardID
 * @property float $AmountUsed
 * @property string $DiscountType
 
 */
class DiscountOrderLink extends Model{

    protected $table = "DiscountOrderLink";
    protected $primaryKey = "DiscountAutoID";

    // Your relationships...

}
