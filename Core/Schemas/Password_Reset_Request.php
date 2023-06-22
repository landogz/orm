<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Password_Reset_Request
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
