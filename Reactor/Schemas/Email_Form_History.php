<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Email_Form_History
 *
 * @property int $ID_Email_Form_History
 * @property int $CustomerID
 * @property string $Event
 * @property string $IP_Address
 * @property \DateTime $LastModified
 
 */
class Email_Form_History extends Model{

    protected $table = "Email_Form_History";
    protected $primaryKey = "ID_Email_Form_History";

    // Your relationships...

}
