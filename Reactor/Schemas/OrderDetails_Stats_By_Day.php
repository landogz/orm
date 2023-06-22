<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\OrderDetails_Stats_By_Day
 *
 * @property int $ID
 * @property \DateTime $StatDate
 * @property int $CategoryID
 * @property int $ProductID
 * @property string $ProductCode
 * @property string $ProductName
 * @property int $OrderDetailsCount
 * @property float $Quantity
 * @property string $TotalPrice
 * @property int $COGS
 * @property string $Profit
 * @property string $ProfitMargin
 
 */
class OrderDetails_Stats_By_Day extends Model{

    protected $table = "OrderDetails_Stats_By_Day";
    protected $primaryKey = "ID";

    // Your relationships...

}
