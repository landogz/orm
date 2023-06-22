<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OrderDetails_Stats_Report_Cache
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
 * @property float $TotalPrice
 * @property int $COGS
 * @property float $Profit
 * @property float $ProfitMargin
 * @property mixed $CreatedDate
 
 */
class OrderDetails_Stats_Report_Cache extends Model{

    protected $table = "OrderDetails_Stats_Report_Cache";
    protected $primaryKey = "ID";

    // Your relationships...

}
