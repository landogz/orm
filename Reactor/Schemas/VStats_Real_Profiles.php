<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\VStats_Real_Profiles
 *
 * @property mixed $ID_VStats_Real_Profiles
 * @property mixed $ID_Customer
 * @property string $IP_Address
 * @property mixed $ID_Affiliate
 * @property int $External_Referrer_Domain
 * @property mixed $External_Referrer_Page
 * @property string $External_Referrer_Query_String
 * @property string $Keywords
 * @property int $Browser
 * @property string $Browser_Version
 * @property int $Operating_System
 * @property int $Resolution
 * @property int $Color_Depth
 * @property string $Flash_Version
 * @property mixed $LastModified
 
 */
class VStats_Real_Profiles extends Model{

    protected $table = "VStats_Real_Profiles";
    protected $primaryKey = "ID_VStats_Real_Profiles";

    // Your relationships...

}
