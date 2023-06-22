<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OrderDetails
 *
 * @property int $OrderDetailID
 * @property int $OrderID
 * @property string $ProductCode
 * @property string $ProductName
 * @property int $Quantity
 * @property string $DownloadFile
 * @property float $ProductPrice
 * @property float $TotalPrice
 * @property string $Shipped
 * @property \DateTime $ShipDate
 * @property int $GiftTrakNumber
 * @property string $Locked
 * @property int $OnOrder_Qty
 * @property string $GiftWrap
 * @property string $GiftWrapNote
 * @property float $GiftWrapCost
 * @property \DateTime $LastModified
 * @property string $OptionIDs
 * @property int $RMA_Number
 * @property int $RMAI_ID
 * @property string $Returned
 * @property \DateTime $Returned_Date
 * @property string $Product_Keys_Shipped
 * @property string $IsKitID
 * @property string $KitID
 * @property float $Fixed_ShippingCost
 * @property float $Fixed_ShippingCost_Outside_LocalRegion
 * @property int $OptionID
 * @property string $Warehouses
 * @property float $ProductWeight
 * @property float $Affiliate_Commissionable_Value
 * @property string $CustomLineItem
 * @property string $TaxableProduct
 * @property string $FreeShippingItem
 * @property string $ProductNote
 * @property int $QtyOnBackOrder
 * @property int $QtyOnHold
 * @property int $QtyShipped
 * @property string $AutoDropShip
 * @property int $LastModBy
 * @property float $Vendor_Price
 * @property int $CategoryID
 * @property int $ProductID
 * @property mixed $Options
 * @property int $QtyOnPackingSlip
 * @property string $CouponCode
 * @property int $DiscountAutoID
 * @property int $DiscountType
 * @property float $DiscountValue
 * @property float $VAT_Percentage
 * @property int $Reward_Points_Given_For_Purchase
 * @property double $Length
 * @property double $Width
 * @property double $Height
 * @property string $Ships_By_Itself
 * @property string $Package_Type
 * @property string $Oversized
 * @property string $Additional_Handling_Indicator
 * @property string $OrderDetailID_Third_Party
 * @property string $OrderDetailID_Third_Party_Link
 * @property string $FreeShippingDiscount
 * @property string $NonShippable
 
 */
class OrderDetails extends Model{

    protected $table = "OrderDetails";
    protected $primaryKey = "OrderDetailID";

    // Your relationships...

}
