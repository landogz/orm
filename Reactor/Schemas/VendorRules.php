<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\VendorRules
 *
 * @property int $VR_ID
 * @property int $Vendor_ID
 * @property string $VR_ProductCode
 * @property int $VR_MinQty
 * @property int $VR_MaxQty
 * @property string $VR_Price
 * @property string $VR_PartNo
 * @property \DateTime $VR_Deactivate_Until
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class VendorRules extends Model{

    protected $table = "VendorRules";
    protected $primaryKey = "VR_ID";

    // Your relationships...

}
