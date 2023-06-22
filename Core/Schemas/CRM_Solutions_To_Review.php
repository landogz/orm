<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CRM_Solutions_To_Review
 *
 * @property int $ID_CRM_Solutions_To_Review
 * @property int $CustomerID
 * @property int $TicketNumber
 * @property string $Reviewed
 * @property mixed $LastModified
 
 */
class CRM_Solutions_To_Review extends Model{

    protected $table = "CRM_Solutions_To_Review";
    protected $primaryKey = "ID_CRM_Solutions_To_Review";

    // Your relationships...

}
