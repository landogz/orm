<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OrderDetails_Stats_ToDo
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
