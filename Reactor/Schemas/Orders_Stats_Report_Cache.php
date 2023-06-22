<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Orders_Stats_Report_Cache
 *
 * @property int $ID
 * @property \DateTime $BegDate
 * @property \DateTime $EndDate
 * @property string $PaymentAmount
 * @property int $OrderCount
 * @property mixed $CreatedDate
 
 */
class Orders_Stats_Report_Cache extends Model{

    protected $table = "Orders_Stats_Report_Cache";
    protected $primaryKey = "ID";

    // Your relationships...

}
