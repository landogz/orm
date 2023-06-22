<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_QBWC_Guid
 *
 * @property int $ID_tbl_QBWC_Guid
 * @property int $QBWC_Ticket
 * @property string $QBType
 * @property int $Step
 * @property \DateTime $LastModified
 * @property string $Completed
 * @property int $CustomerID
 
 */
class tbl_QBWC_Guid extends Model{

    protected $table = "tbl_QBWC_Guid";
    protected $primaryKey = "ID_tbl_QBWC_Guid";

    // Your relationships...

}
