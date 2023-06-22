<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\OrderTrack
 *
 * @property int $ClickTrackID
 * @property int $OrderID
 * @property string $Paid
 * @property string $Returned
 
 */
class OrderTrack extends Model{

    protected $table = "OrderTrack";
    protected $primaryKey = null;

    // Your relationships...

}
