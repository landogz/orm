<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\KITLNKS
 *
 * @property int $KITLNK_ID
 * @property int $KIT_ID
 * @property string $KITLNK_ProductCode
 * @property int $KITLNK_OPTIONID
 * @property int $KITLNK_QTY
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $KitLnk_PriceDiff
 
 */
class KITLNKS extends Model{

    protected $table = "KITLNKS";
    protected $primaryKey = "KITLNK_ID";

    // Your relationships...

}
