<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CartGiftCards
 *
 * @property int $ID
 * @property string $CartID
 * @property string $GiftSendMethod
 * @property string $GiftToName
 * @property string $GiftFromName
 * @property string $GiftAmount
 * @property int $GiftQuantity
 * @property \DateTime $LastModified
 * @property mixed $GiftEmailAddresses
 * @property mixed $GiftMessage
 
 */
class CartGiftCards extends Model{

    protected $table = "CartGiftCards";
    protected $primaryKey = "ID";

    // Your relationships...

}
