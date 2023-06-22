<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\DiscountOrderLink
 *
 * @property int $DiscountAutoID
 * @property int $OrderID
 * @property string $GiftCardID
 * @property string $AmountUsed
 * @property string $DiscountType
 
 */
class DiscountOrderLink extends Model{

    protected $table = "DiscountOrderLink";
    protected $primaryKey = "DiscountAutoID";

    // Your relationships...

}
