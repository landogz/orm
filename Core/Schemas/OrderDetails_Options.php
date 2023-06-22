<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OrderDetails_Options
 *
 * @property int $OrderDetailID
 * @property int $OptionID
 
 */
class OrderDetails_Options extends Model{

    protected $table = "OrderDetails_Options";
    protected $primaryKey = null;

    // Your relationships...

}
