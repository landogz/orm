<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\POs
 *
 * @property int $PO_Num
 * @property \DateTime $PO_Date
 * @property int $Vendor_ID
 * @property string $Vendor_Title
 * @property string $Vendor_Address
 * @property string $Vendor_PO_SendVia
 * @property string $Vendor_PO_Template
 * @property string $Vendor_EmailAddress
 * @property string $Vendor_Email_Subject
 * @property string $Vendor_FaxNumber
 * @property string $Vendor_PO_ShipTo
 * @property string $Vendor_PO_ShipVia
 * @property string $Vendor_PO_Terms
 * @property string $Vendor_PO_DueDate
 * @property string $Vendor_PO_FOB
 * @property string $Vendor_PO_Notes
 * @property string $Vendor_PO_SignedBy
 * @property float $PO_ShippingCost
 * @property string $PO_Status
 * @property \DateTime $LastModified
 * @property int $Customer_OrderID
 * @property int $LastModBy
 * @property string $PO_Vendor_Invoice_Num
 * @property \DateTime $PO_Vendor_Invoice_Date
 * @property mixed $Vendor_Contacts
 
 */
class POs extends Model{

    protected $table = "POs";
    protected $primaryKey = "PO_Num";

    // Your relationships...

}
