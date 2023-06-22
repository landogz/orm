<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Orders_Stats_By_Day
 *
 * @property int $ID
 * @property \DateTime $StatDate
 * @property float $PaymentAmount
 * @property int $OrderCount
 
 */
class Orders_Stats_By_Day extends Model{

    protected $table = "Orders_Stats_By_Day";
    protected $primaryKey = "ID";

    // Your relationships...

}
