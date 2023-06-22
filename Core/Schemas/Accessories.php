<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Accessories
 *
 * @property int $ProductID
 * @property int $AccessoryProductID
 
 */
class Accessories extends Model{

    protected $table = "Accessories";
    protected $primaryKey = null;

    // Your relationships...

}
