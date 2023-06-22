<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\tbl_QBWC_Guid_Log
 *
 * @property int $ID_tbl_QBWC_Guid_Log
 * @property int $QBWC_Ticket
 * @property mixed $XMLSent
 * @property mixed $XMLReceived
 * @property \DateTime $LastModified
 
 */
class tbl_QBWC_Guid_Log extends Model{

    protected $table = "tbl_QBWC_Guid_Log";
    protected $primaryKey = "ID_tbl_QBWC_Guid_Log";

    // Your relationships...

}
