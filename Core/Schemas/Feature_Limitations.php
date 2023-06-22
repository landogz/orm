<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Feature_Limitations
 *
 * @property string $Feature_Name
 * @property string $Feature_Value
 * @property string $Feature_Description
 * @property \DateTime $LastModified
 
 */
class Feature_Limitations extends Model{

    protected $table = "Feature_Limitations";
    protected $primaryKey = null;

    // Your relationships...

}
