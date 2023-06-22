<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\KITS
 *
 * @property int $KIT_ID
 * @property string $KIT_Type
 * @property string $KIT_ProductCode
 * @property string $KIT_IsProductCode
 * @property int $KIT_QTY
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property int $Kit_OrderBy
 
 */
class KITS extends Model{

    protected $table = "KITS";
    protected $primaryKey = "KIT_ID";

    // Your relationships...

}
