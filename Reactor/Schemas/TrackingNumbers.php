<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\TrackingNumbers
 *
 * @property string $TrackingNumber
 * @property string $Gateway
 * @property \DateTime $ShipDate
 * @property int $OrderID
 * @property string $Shipment_Cost
 * @property int $ShippingMethodID
 * @property string $Package
 * @property string $Form
 
 */
class TrackingNumbers extends Model{

    protected $table = "TrackingNumbers";
    protected $primaryKey = null;

    // Your relationships...

}
