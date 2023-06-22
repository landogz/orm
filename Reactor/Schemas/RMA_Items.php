<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\RMA_Items
 *
 * @property int $RMAI_ID
 * @property int $RMA_Number
 * @property int $RMAI_OrderDetailID
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property int $RMAI_Quantity
 * @property int $RMAI_QtyReceived_Sellable
 * @property int $RMAI_QtyReceived_Damaged
 * @property string $RMAI_LostValue
 * @property string $RMAI_RefundType
 * @property int $RMAI_Exchange_OrderID
 
 */
class RMA_Items extends Model{

    protected $table = "RMA_Items";
    protected $primaryKey = "RMAI_ID";

    // Your relationships...

}
