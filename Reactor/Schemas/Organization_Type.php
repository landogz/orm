<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Organization_Type
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
