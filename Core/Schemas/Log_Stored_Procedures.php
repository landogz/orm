<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Log_Stored_Procedures
 *
 * @property int $ID
 * @property string $spName
 * @property \DateTime $Start
 * @property int $DurationInSeconds
 * @property string $Parameters
 
 */
class Log_Stored_Procedures extends Model{

    protected $table = "Log_Stored_Procedures";
    protected $primaryKey = "ID";

    // Your relationships...

}
