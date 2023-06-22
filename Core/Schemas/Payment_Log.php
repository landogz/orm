<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Payment_Log
 *
 * @property int $Pay_ID
 * @property int $Pay_PaymentMethodID
 * @property string $Pay_TransID
 * @property string $Pay_AuthCode
 * @property string $Pay_AVS_Response
 * @property string $Pay_CVV2_Response
 * @property string $Pay_Result
 * @property float $Pay_Amount
 * @property int $Pay_OrderID
 * @property \DateTime $Pay_AuthDate
 * @property string $Pay_Details
 * @property string $Deleted
 * @property string $Pay_Exclude_From_Total_Due
 * @property string $Pay_Parent_TransID
 * @property string $Third_Party_Field1
 * @property int $PCIaaS_RecurringTransaction
 * @property string $PCIaaS_TransactionId
 
 */
class Payment_Log extends Model{

    protected $table = "Payment_Log";
    protected $primaryKey = "Pay_ID";

    // Your relationships...

}
