<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\AdminHistory
 *
 * @property int $AH_ID
 * @property int $AH_CustomerID
 * @property string $AH_IPAddress
 * @property \DateTime $LastModified
 * @property int $ID_AdminHistory_URLs
 
 */
class AdminHistory extends Model{

    protected $table = "AdminHistory";
    protected $primaryKey = "AH_ID";

    // Your relationships...

}
