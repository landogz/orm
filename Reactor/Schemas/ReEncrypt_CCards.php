<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ReEncrypt_CCards
 *
 * @property int $CCardID
 * @property string $CreditCardNumber
 * @property string $AccountNumber
 * @property string $MICR
 * @property string $CreditCardExpDate
 * @property string $CardHoldersName
 * @property string $CVV2
 * @property string $BankName
 * @property string $RoutingNumber
 * @property string $CheckNumber
 * @property string $CreditCardIssueDate
 * @property string $CreditCardIssueNumber
 
 */
class ReEncrypt_CCards extends Model{

    protected $table = "ReEncrypt_CCards";
    protected $primaryKey = null;

    // Your relationships...

}
