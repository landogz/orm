<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Newsletter_Email_Addresses
 *
 * @property int $ID_Newsletter_Email_Addresses
 * @property string $Email_Address
 * @property string $Certified
 * @property int $GUID
 
 */
class Newsletter_Email_Addresses extends Model{

    protected $table = "Newsletter_Email_Addresses";
    protected $primaryKey = "ID_Newsletter_Email_Addresses";

    // Your relationships...

}
