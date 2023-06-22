<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Fraud
 *
 * @property int $FraudID
 * @property int $OrderID
 * @property int $Score
 * @property mixed $DateAdded
 * @property mixed $DateUpdated
 
 */
class Fraud extends Model{

    protected $table = "Fraud";
    protected $primaryKey = "FraudID";

    // Your relationships...

}
