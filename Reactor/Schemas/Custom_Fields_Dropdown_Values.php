<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Custom_Fields_Dropdown_Values
 *
 * @property int $Custom_Fields_Dropdown_Values_ID
 * @property int $Custom_Fields_ID
 * @property string $Title
 * @property string $Value
 * @property int $Placement_Order
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Custom_Fields_Dropdown_Values extends Model{

    protected $table = "Custom_Fields_Dropdown_Values";
    protected $primaryKey = "Custom_Fields_Dropdown_Values_ID";

    // Your relationships...

}
