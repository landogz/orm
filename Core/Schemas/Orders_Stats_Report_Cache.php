<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Orders_Stats_Report_Cache
 *
 * @property int $ID
 * @property \DateTime $BegDate
 * @property \DateTime $EndDate
 * @property float $PaymentAmount
 * @property int $OrderCount
 * @property mixed $CreatedDate
 
 */
class Orders_Stats_Report_Cache extends Model{

    protected $table = "Orders_Stats_Report_Cache";
    protected $primaryKey = "ID";

    // Your relationships...

}
