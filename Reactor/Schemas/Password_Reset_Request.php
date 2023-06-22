<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Password_Reset_Request
 *
 * @property string $EmailAddress
 * @property int $CustomerID_Guid
 * @property \DateTime $LastModified
 
 */
class Password_Reset_Request extends Model{

    protected $table = "Password_Reset_Request";
    protected $primaryKey = null;

    // Your relationships...

}
