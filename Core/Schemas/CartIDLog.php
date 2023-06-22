<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CartIDLog
 *
 * @property string $CartID
 * @property int $CustomerID
 * @property string $IPAddress
 * @property string $Email_Address
 * @property string $Phone_Number
 * @property string $Page_Name
 * @property string $Notes
 * @property \DateTime $LastModified
 * @property int $CartID_Number
 * @property \DateTime $RetentionEmailSent
 
 */
class CartIDLog extends Model{

    protected $table = "CartIDLog";
    protected $primaryKey = null;

    // Your relationships...

}
