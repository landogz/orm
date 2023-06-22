<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Reward_Points_History
 *
 * @property int $ID_Reward_Points_History
 * @property int $CustomerID
 * @property int $OrderID
 * @property int $Points
 * @property \DateTime $AvailableOn
 * @property string $Event
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $Archived
 * @property mixed $ExpiresOn
 
 */
class Reward_Points_History extends Model{

    protected $table = "Reward_Points_History";
    protected $primaryKey = "ID_Reward_Points_History";

    // Your relationships...

}
