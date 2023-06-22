<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Orders
 *
 * @property int $OrderID
 * @property int $CustomerID
 * @property string $BillingCompanyName
 * @property string $BillingFirstName
 * @property string $BillingLastName
 * @property string $BillingAddress1
 * @property string $BillingAddress2
 * @property string $BillingCity
 * @property string $BillingState
 * @property string $BillingPostalCode
 * @property string $BillingCountry
 * @property string $BillingPhoneNumber
 * @property string $ShipCompanyName
 * @property string $ShipFirstName
 * @property string $ShipLastName
 * @property string $ShipAddress1
 * @property string $ShipAddress2
 * @property string $ShipCity
 * @property string $ShipState
 * @property string $ShipPostalCode
 * @property string $ShipCountry
 * @property string $ShipPhoneNumber
 * @property string $ShipFaxNumber
 * @property int $ShippingMethodID
 * @property float $TotalShippingCost
 * @property float $SalesTaxRate
 * @property float $PaymentAmount
 * @property int $PaymentMethodID
 * @property string $CardHoldersName
 * @property string $CreditCardExpDate
 * @property string $CreditCardAuthorizationNumber
 * @property string $CreditCardTransactionID
 * @property string $BankName
 * @property string $RoutingNumber
 * @property string $AccountNumber
 * @property string $AccountType
 * @property string $MICR
 * @property string $CheckNumber
 * @property string $PONum
 * @property string $GiftCardIDUsed
 * @property string $IsAGift
 * @property string $Locked
 * @property string $Shipped
 * @property int $VendorID
 * @property \DateTime $OrderDate
 * @property \DateTime $CreditCardAuthorizationDate
 * @property \DateTime $ShipDate
 * @property string $PaymentDeclined
 * @property string $Customer_IPAddress
 * @property \DateTime $LastModified
 * @property string $AVS
 * @property float $CashTender
 * @property string $BillingFaxNumber
 * @property string $CVV2_Response
 * @property string $OrderStatus
 * @property float $Affiliate_Commissionable_Value
 * @property string $Processed_AutoEvents
 * @property int $LastModBy
 * @property string $Shipping_Locked
 * @property string $Printed
 * @property float $Total_Payment_Received
 * @property float $Total_Payment_Authorized
 * @property int $BatchNumber
 * @property string $Tax1_Title
 * @property string $Tax2_Title
 * @property string $Tax3_Title
 * @property float $SalesTaxRate1
 * @property float $SalesTaxRate2
 * @property float $SalesTaxRate3
 * @property float $SalesTax1
 * @property float $SalesTax2
 * @property float $SalesTax3
 * @property string $CreditCardIssueDate
 * @property string $CreditCardIssueNumber
 * @property mixed $OrderNotes
 * @property mixed $Order_Comments
 * @property int $SalesRep_CustomerID
 * @property string $Order_Entry_System
 * @property string $ShipResidential
 * @property int $Stock_Priority
 * @property string $Custom_Field_Custom3
 * @property string $Custom_Field_Custom4
 * @property string $OrderID_Third_Party
 * @property string $AddressValidated
 * @property string $CC_Last4
 * @property int $DV_CreditCardNumber
 * @property string $TaxRate_IsVat
 * @property int $Tax2_IncludePrevious
 * @property int $Tax3_IncludePrevious
 * @property string $Tax1_IgnoreNoTaxRules
 * @property string $Tax2_IgnoreNoTaxRules
 * @property string $Tax3_IgnoreNoTaxRules
 * @property string $GiftWrapNote
 * @property string $AuthHash
 * @property string $PCIaaS_CardId
 * @property string $PCIaaS_MaskedCardRef
 * @property string $sOrderID
 * @property string $CancelReason
 * @property \DateTime $CancelDate
 * @property int $IsGTSOrder
 * @property \DateTime $InitiallyShippedDate
 * @property string $OrderID_Third_Party_Link
 * @property mixed $OrderDateUtc
 * @property string $FreeShippingDiscountApplied
 
 */
class Orders extends Model{

    protected $table = "Orders";
    protected $primaryKey = "OrderID";

    // Your relationships...

}
