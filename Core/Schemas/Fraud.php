<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Fraud
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
