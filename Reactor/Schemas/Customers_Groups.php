<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Customers_Groups
 *
 * @property int $ID_Customers_Groups
 * @property string $Group_Title
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class Customers_Groups extends Model{

    protected $table = "Customers_Groups";
    protected $primaryKey = "ID_Customers_Groups";

    // Your relationships...

}
