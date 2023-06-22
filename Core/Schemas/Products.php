<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Products
 *
 * @property int $ProductID
 * @property string $ProductCode
 * @property string $Vendor_PartNo
 * @property string $ProductName
 * @property \DateTime $DisplayBeginDate
 * @property \DateTime $DisplayEndDate
 * @property string $HideProduct
 * @property int $StockStatus
 * @property \DateTime $LastModified
 * @property string $Options_Cloned_From
 * @property string $Photos_Cloned_From
 * @property string $Share_StockStatus_With
 * @property int $LastModBy
 * @property string $IsChildOfProductCode
 * @property int $IsChildOfProductCode_ProductID
 * @property int $Options_Cloned_From_ProductID
 * @property int $Photos_Cloned_From_ProductID
 * @property int $Share_StockStatus_With_ProductID
 * @property int $ProductPopularity
 * @property int $HomePage_Section
 * @property string $AutoDropShip
 * @property string $DoNotAllowBackOrders
 * @property string $WarehouseLocation
 * @property string $WarehouseAisle
 * @property string $WarehouseBin
 * @property string $WarehouseCustom
 
 */
class Products extends Model{

    protected $table = "Products";
    protected $primaryKey = null;

    // Your relationships...

}
