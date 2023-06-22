<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Navigation_Menus
 *
 * @property int $ID_Navigation_Menus
 * @property int $Category_Visible
 * @property string $Template_Name
 * @property string $Title
 * @property string $Type
 * @property string $Alignment
 * @property string $Divider
 * @property string $Width
 * @property int $Sub_Levels
 * @property string $CUSTOM_DIVIDER
 * @property string $CUSTOM_MENU_ITEM
 * @property string $Title_TextColor
 * @property string $Title_BgColor
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $Menu_Visible
 
 */
class Navigation_Menus extends Model{

    protected $table = "Navigation_Menus";
    protected $primaryKey = "ID_Navigation_Menus";

    // Your relationships...

}
