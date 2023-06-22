<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\GiftCards
 *
 * @property string $GiftCardID
 * @property float $GiftAmount
 * @property float $GiftAmountLeft
 * @property \DateTime $DateCreated
 * @property int $ByOrderID
 * @property \DateTime $LastModified
 * @property int $CustomerID
 * @property string $Active
 * @property int $LastModBy
 
 */
class GiftCards extends Model{

    protected $table = "GiftCards";
    protected $primaryKey = null;

    // Your relationships...

}
