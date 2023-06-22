<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\VStats_Raw_Profiles
 *
 * @property mixed $ID_VStats_Raw_Profiles
 * @property string $IP_Address
 * @property mixed $ID_Affiliate
 * @property string $External_Referrer_Domain
 * @property string $External_Referrer_Page
 * @property string $External_Referrer_Query_String
 * @property string $Keywords
 * @property string $Browser
 * @property string $Browser_Version
 * @property string $Operating_System
 * @property int $Screen_Width
 * @property int $Screen_Height
 * @property int $Color_Depth
 * @property string $Flash_Version
 * @property mixed $LastModified
 
 */
class VStats_Raw_Profiles extends Model{

    protected $table = "VStats_Raw_Profiles";
    protected $primaryKey = "ID_VStats_Raw_Profiles";

    // Your relationships...

}
