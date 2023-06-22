<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\VStats_Enum_External_Domains
 *
 * @property mixed $ID_VStats_Enum_External_Domains
 * @property string $External_Referrer_Domain
 
 */
class VStats_Enum_External_Domains extends Model{

    protected $table = "VStats_Enum_External_Domains";
    protected $primaryKey = "ID_VStats_Enum_External_Domains";

    // Your relationships...

}
