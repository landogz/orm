<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Site_Limitations
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
