<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Orders_Stats_By_Day
 *
 * @property int $ID
 * @property \DateTime $StatDate
 * @property string $PaymentAmount
 * @property int $OrderCount
 
 */
class Orders_Stats_By_Day extends Model{

    protected $table = "Orders_Stats_By_Day";
    protected $primaryKey = "ID";

    // Your relationships...

}
