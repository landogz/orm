<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Session_Tokens
 *
 * @property int $ID
 * @property string $Session_Token
 * @property string $IP_Address
 * @property int $CustomerID
 * @property \DateTime $Datetime_Issued
 
 */
class Session_Tokens extends Model{

    protected $table = "Session_Tokens";
    protected $primaryKey = "ID";

    // Your relationships...

}
