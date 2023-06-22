<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\IP_Address_Security_Rules
 *
 * @property int $ID
 * @property string $Allow_Or_Block
 * @property string $Applies_To_Admin_Area_Only
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $IP_Range_Begin
 * @property string $IP_Range_End
 
 */
class IP_Address_Security_Rules extends Model{

    protected $table = "IP_Address_Security_Rules";
    protected $primaryKey = "ID";

    // Your relationships...

}
