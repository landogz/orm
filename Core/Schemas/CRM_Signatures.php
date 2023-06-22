<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_Signatures
 *
 * @property int $ID
 * @property int $CustomerID
 * @property string $Title
 * @property mixed $Body
 * @property string $MyDefault
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class CRM_Signatures extends Model{

    protected $table = "CRM_Signatures";
    protected $primaryKey = "ID";

    // Your relationships...

}
