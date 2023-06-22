<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Organization_Type
 *
 * @property int $ID
 * @property string $organization_type_display
 * @property string $organization_type_value
 
 */
class Organization_Type extends Model{

    protected $table = "Organization_Type";
    protected $primaryKey = "ID";

    // Your relationships...

}
