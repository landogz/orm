<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Back_In_Stock_Requests
 *
 * @property int $ID_Back_In_Stock_Requests
 * @property string $EmailAddress
 * @property string $ProductCode
 * @property string $Sent_Email
 * @property \DateTime $Date_Requested
 
 */
class Back_In_Stock_Requests extends Model{

    protected $table = "Back_In_Stock_Requests";
    protected $primaryKey = "ID_Back_In_Stock_Requests";

    // Your relationships...

}
