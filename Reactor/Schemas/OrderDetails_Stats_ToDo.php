<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\OrderDetails_Stats_ToDo
 *
 * @property int $ID
 * @property \DateTime $OrderDate
 * @property mixed $OrderDateUtc
 
 */
class OrderDetails_Stats_ToDo extends Model{

    protected $table = "OrderDetails_Stats_ToDo";
    protected $primaryKey = "ID";

    // Your relationships...

}
