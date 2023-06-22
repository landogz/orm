<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\GiftCards
 *
 * @property string $GiftCardID
 * @property string $GiftAmount
 * @property string $GiftAmountLeft
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
