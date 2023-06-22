<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OrderDetails_Stats_By_Day
 *
 * @property int $ID
 * @property \DateTime $StatDate
 * @property int $CategoryID
 * @property int $ProductID
 * @property string $ProductCode
 * @property string $ProductName
 * @property int $OrderDetailsCount
 * @property float $Quantity
 * @property float $TotalPrice
 * @property int $COGS
 * @property float $Profit
 * @property float $ProfitMargin
 
 */
class OrderDetails_Stats_By_Day extends Model{

    protected $table = "OrderDetails_Stats_By_Day";
    protected $primaryKey = "ID";

    // Your relationships...

}
