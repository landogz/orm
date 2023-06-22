<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Options
 *
 * @property int $ID
 * @property int $OptionCatID
 * @property string $ReplacesOptionID
 * @property string $OptionsDesc
 * @property float $PriceDiff
 * @property float $ProductWeight
 * @property float $RecurringPriceDiff
 * @property string $JumpToProductCode
 * @property string $NoValue
 * @property int $ArrangeOptionsBy
 * @property string $DefaultSelected
 * @property string $Textbox_Size
 * @property string $Textbox_Rows
 * @property string $Validate_RegExpression
 * @property string $Validate_ErrorMessage
 * @property string $Validate_OptionID
 * @property string $Validate_OptionCatID
 * @property \DateTime $LastModified
 * @property string $IsProductCode
 * @property float $VendorPriceDiff
 * @property string $Only_Available_With_OptionIDs
 * @property string $Not_Available_With_OptionIDs
 * @property string $IsProductPrice
 * @property string $IsProductQuantity
 * @property string $IsFixedShippingCost
 * @property int $IsProductCode_Qty
 * @property float $SetupCostDiff
 * @property int $LastModBy
 * @property mixed $OptionsDesc_SideNote
 * @property string $Textbox_Max_Length
 * @property float $FixedShippingCost
 
 */
class Options extends Model{

    protected $table = "Options";
    protected $primaryKey = "ID";

    // Your relationships...

}
