<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\GiftCardDetails
 *
 * @property int $GiftCardDetailsID
 * @property string $GiftCardID
 * @property string $SendMethod
 * @property string $EmailAddresses
 * @property string $ToName
 * @property string $FromName
 * @property int $GiftTrakNumber
 * @property mixed $Message
 
 */
class GiftCardDetails extends Model{

    protected $table = "GiftCardDetails";
    protected $primaryKey = "GiftCardDetailsID";

    // Your relationships...

}
