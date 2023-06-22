<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Orders_Review_Survey
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
