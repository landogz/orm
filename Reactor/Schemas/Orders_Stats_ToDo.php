<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Orders_Stats_ToDo
 *
 * @property int $ID
 * @property \DateTime $OrderDate
 * @property mixed $OrderDateUtc
 
 */
class Orders_Stats_ToDo extends Model{

    protected $table = "Orders_Stats_ToDo";
    protected $primaryKey = "ID";

    // Your relationships...

}
