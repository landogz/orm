<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CRM_Rating_Rules
 *
 * @property int $ID_CRM_Rating_Rules
 * @property string $Name
 * @property string $Type
 * @property int $Value
 * @property string $Point_Value
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class CRM_Rating_Rules extends Model{

    protected $table = "CRM_Rating_Rules";
    protected $primaryKey = "ID_CRM_Rating_Rules";

    // Your relationships...

}
