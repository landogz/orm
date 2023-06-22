<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\FraudDetail
 *
 * @property int $FraudDetailID
 * @property int $FraudID
 * @property int $DecisionID
 * @property int $Decision
 
 */
class FraudDetail extends Model{

    protected $table = "FraudDetail";
    protected $primaryKey = "FraudDetailID";

    // Your relationships...

}
