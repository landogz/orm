<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\TrackingNumbers
 *
 * @property string $TrackingNumber
 * @property string $Gateway
 * @property \DateTime $ShipDate
 * @property int $OrderID
 * @property float $Shipment_Cost
 * @property int $ShippingMethodID
 * @property string $Package
 * @property string $Form
 
 */
class TrackingNumbers extends Model{

    protected $table = "TrackingNumbers";
    protected $primaryKey = null;

    // Your relationships...

}
