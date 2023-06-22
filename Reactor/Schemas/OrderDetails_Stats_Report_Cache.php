<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\OrderDetails_Stats_Report_Cache
 *
 * @property int $ID
 * @property \DateTime $BegDate
 * @property \DateTime $EndDate
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
 * @property mixed $CreatedDate
 
 */
class OrderDetails_Stats_Report_Cache extends Model{

    protected $table = "OrderDetails_Stats_Report_Cache";
    protected $primaryKey = "ID";

    // Your relationships...

}
