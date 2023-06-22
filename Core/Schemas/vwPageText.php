<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\vwPageText
 *
 * @property int $ID
 * @property string $Text
 * @property string $Section_Name
 * @property string $HideTooltip
 * @property int $NumVariables
 
 */
class vwPageText extends Model{

    protected $table = "vwPageText";
    protected $primaryKey = null;

    // Your relationships...

}
