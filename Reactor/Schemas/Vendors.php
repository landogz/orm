<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Vendors
 *
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
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $Allows_DropShipping
 * @property string $Active
 * @property mixed $Vendor_Contacts
 
 */
class Vendors extends Model{

    protected $table = "Vendors";
    protected $primaryKey = null;

    // Your relationships...

}
