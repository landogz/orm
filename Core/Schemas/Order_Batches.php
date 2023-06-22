<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Order_Batches
 *
 * @property int $ID
 * @property \DateTime $Date
 * @property int $GeneratedBy
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Order_Batches extends Model{

    protected $table = "Order_Batches";
    protected $primaryKey = "ID";

    // Your relationships...

}
