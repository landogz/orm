<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CartGiftCards
 *
 * @property int $ID
 * @property string $CartID
 * @property string $GiftSendMethod
 * @property string $GiftToName
 * @property string $GiftFromName
 * @property float $GiftAmount
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
