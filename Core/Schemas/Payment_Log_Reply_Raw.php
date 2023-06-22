<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Payment_Log_Reply_Raw
 *
 * @property int $ID_Payment_Log_Reply_Raw
 * @property int $Pay_ID
 * @property string $Reply
 
 */
class Payment_Log_Reply_Raw extends Model{

    protected $table = "Payment_Log_Reply_Raw";
    protected $primaryKey = "ID_Payment_Log_Reply_Raw";

    // Your relationships...

}
