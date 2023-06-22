<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Accessories
 *
 * @property int $ProductID
 * @property int $AccessoryProductID
 
 */
class Accessories extends Model{

    protected $table = "Accessories";
    protected $primaryKey = null;

    // Your relationships...

}
