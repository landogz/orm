<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\RMAs
 *
 * @property int $RMA_Number
 * @property \DateTime $RMA_Date_Requested
 * @property int $RMA_OrderID
 * @property string $RMA_Status
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property \DateTime $RMA_Deadline
 * @property mixed $RMA_Notes
 
 */
class RMAs extends Model{

    protected $table = "RMAs";
    protected $primaryKey = "RMA_Number";

    // Your relationships...

}
