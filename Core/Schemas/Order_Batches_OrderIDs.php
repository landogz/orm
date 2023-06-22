<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Order_Batches_OrderIDs
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
