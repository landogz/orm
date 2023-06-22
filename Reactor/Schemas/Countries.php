<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Countries
 *
 * @property int $ID
 * @property string $Name
 * @property string $ISO
 * @property string $USPSCode
 * @property \DateTime $LastModified
 * @property string $Active
 * @property string $Country_IsLocalRegion
 * @property int $LastModBy
 * @property string $State_Province_Text
 * @property string $ISO3166_2
 
 */
class Countries extends Model{

    protected $table = "Countries";
    protected $primaryKey = "ID";

    // Your relationships...

}
