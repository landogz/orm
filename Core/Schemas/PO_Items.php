<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\PO_Items
 *
 * @property int $POI_ID
 * @property int $PO_Num
 * @property string $POI_ProductCode
 * @property string $POI_Vendor_PartNo
 * @property string $POI_ProductName
 * @property int $POI_Quantity
 * @property float $POI_VendorPrice
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property int $POI_QtyReceived
 * @property float $POI_ShippingCost
 * @property int $POI_OrderDetailID
 * @property mixed $POI_Options
 
 */
class PO_Items extends Model{

    protected $table = "PO_Items";
    protected $primaryKey = "POI_ID";

    // Your relationships...

}
