<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Order_Batches_OrderIDs
 *
 * @property int $ID
 * @property int $BatchID
 * @property int $OrderID
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Order_Batches_OrderIDs extends Model{

    protected $table = "Order_Batches_OrderIDs";
    protected $primaryKey = "ID";

    // Your relationships...

}
