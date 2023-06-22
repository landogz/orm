<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\PageText
 *
 * @property int $ID
 * @property string $Text
 * @property string $Section_Name
 * @property string $HideTooltip
 * @property int $NumVariables
 
 */
class PageText extends Model{

    protected $table = "PageText";
    protected $primaryKey = null;

    // Your relationships...

}
