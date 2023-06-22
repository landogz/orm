<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\VStats_Enum_Browsers
 *
 * @property int $ID_VStats_Enum_Browsers
 * @property string $Browser
 
 */
class VStats_Enum_Browsers extends Model{

    protected $table = "VStats_Enum_Browsers";
    protected $primaryKey = "ID_VStats_Enum_Browsers";

    // Your relationships...

}
