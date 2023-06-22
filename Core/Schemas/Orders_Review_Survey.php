<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Orders_Review_Survey
 *
 * @property int $OrderID
 * @property string $EmailSent
 * @property int $OrderID_Guid
 
 */
class Orders_Review_Survey extends Model{

    protected $table = "Orders_Review_Survey";
    protected $primaryKey = null;

    // Your relationships...

}
