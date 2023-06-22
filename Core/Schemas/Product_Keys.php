<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Product_Keys
 *
 * @property int $PKey_ID
 * @property string $PKey_KeyType
 * @property string $PKey_AllowReuse
 * @property string $PKey_Used
 * @property \DateTime $PKey_DateAdded
 * @property string $PKey_Email_Template
 * @property string $PKey_Email_Subject
 * @property \DateTime $LastModified
 * @property int $PKey_OriginalOrderID
 * @property int $PKey_OriginalOrderDetailID
 * @property int $LastModBy
 * @property mixed $PKey_Email_Body
 
 */
class Product_Keys extends Model{

    protected $table = "Product_Keys";
    protected $primaryKey = "PKey_ID";

    // Your relationships...

}
