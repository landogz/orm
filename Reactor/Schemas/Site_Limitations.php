<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Site_Limitations
 *
 * @property int $SiteLimitationID
 * @property string $SiteLimitation_Name
 * @property string $SiteLimitation_Value
 * @property string $SiteLimitation_Description
 * @property mixed $LastModified
 * @property string $ModBy
 
 */
class Site_Limitations extends Model{

    protected $table = "Site_Limitations";
    protected $primaryKey = "SiteLimitationID";

    // Your relationships...

}
