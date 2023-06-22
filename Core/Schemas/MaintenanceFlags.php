<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\MaintenanceFlags
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
