<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CCards
 *
 * @property int $CCardID
 * @property int $CustomerID
 * @property int $CreditCardType
 * @property string $CardHoldersName
 * @property string $CreditCardExpDate
 * @property string $BankName
 * @property string $RoutingNumber
 * @property string $AccountNumber
 * @property string $AccountType
 * @property string $MICR
 * @property string $CheckNumber
 * @property string $PONum
 * @property string $CCardChosen
 * @property \DateTime $LastModified
 * @property string $CashTender
 * @property string $Keep_Payment_Method_On_File
 * @property string $CreditCardIssueDate
 * @property string $CreditCardIssueNumber
 * @property string $CC_Last4
 * @property int $DV_CreditCardNumber
 * @property string $PCIaaS_CardId
 * @property string $PCIaaS_MaskedCardRef
 
 */
class CCards extends Model{

    protected $table = "CCards";
    protected $primaryKey = "CCardID";

    // Your relationships...

}
