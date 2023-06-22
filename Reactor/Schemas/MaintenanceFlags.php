<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\MaintenanceFlags
 *
 * @property string $FlagName
 * @property string $FlagValue
 * @property \DateTime $LastModified
 
 */
class MaintenanceFlags extends Model{

    protected $table = "MaintenanceFlags";
    protected $primaryKey = null;

    // Your relationships...

}
