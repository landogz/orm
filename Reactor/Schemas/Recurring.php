<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Recurring
 *
 * @property int $ID
 * @property int $OriginalOrderID
 * @property \DateTime $StartDate
 * @property \DateTime $EndDate
 * @property string $RecurringPrice
 * @property int $HowOften
 * @property \DateTime $LastPaid
 * @property string $Active
 * @property \DateTime $LastModified
 * @property int $OriginalOrderDetailID
 * @property string $Recurring_Note
 * @property \DateTime $Delay_Charge_Until
 * @property string $IsStartPrice
 * @property int $LastModBy
 
 */
class Recurring extends Model{

    protected $table = "Recurring";
    protected $primaryKey = "ID";

    // Your relationships...

}
