<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Base_Revisions
 *
 * @property int $ID_Base_Revisions
 * @property string $Table_Name
 * @property string $Column_Name
 * @property string $ID_Reference
 * @property mixed $Revision
 * @property string $Approved
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class Base_Revisions extends Model{

    protected $table = "Base_Revisions";
    protected $primaryKey = "ID_Base_Revisions";

    // Your relationships...

}
