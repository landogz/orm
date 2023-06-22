<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\States_Provinces
 *
 * @property int $State_ID
 * @property string $State_Name
 * @property string $State_Code
 * @property string $State_IsLocalRegion
 * @property \DateTime $LastModified
 * @property int $Country_ID
 * @property int $LastModBy
 * @property string $Active
 
 */
class States_Provinces extends Model{

    protected $table = "States_Provinces";
    protected $primaryKey = "State_ID";

    // Your relationships...

}
