<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CRM_Inbound_Rules
 *
 * @property int $ID_CRM_Inbound_Rules
 * @property string $Field
 * @property string $Operator
 * @property string $Value
 * @property string $Action
 * @property int $Department
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class CRM_Inbound_Rules extends Model{

    protected $table = "CRM_Inbound_Rules";
    protected $primaryKey = "ID_CRM_Inbound_Rules";

    // Your relationships...

}
