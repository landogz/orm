<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OrderTrack
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
