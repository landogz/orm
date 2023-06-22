<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\KITLNKS
 *
 * @property int $KITLNK_ID
 * @property int $KIT_ID
 * @property string $KITLNK_ProductCode
 * @property int $KITLNK_OPTIONID
 * @property int $KITLNK_QTY
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property float $KitLnk_PriceDiff
 
 */
class KITLNKS extends Model{

    protected $table = "KITLNKS";
    protected $primaryKey = "KITLNK_ID";

    // Your relationships...

}
