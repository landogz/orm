<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Login_History
 *
 * @property int $ID_Login_History
 * @property int $CustomerID
 * @property string $Event
 * @property string $IP_Address
 * @property \DateTime $LastModified
 
 */
class Login_History extends Model{

    protected $table = "Login_History";
    protected $primaryKey = "ID_Login_History";

    // Your relationships...

}
