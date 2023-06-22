<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\InvHist
 *
 * @property int $IH_ID
 * @property string $IH_Barcode
 * @property string $IH_ProductCode
 * @property int $IH_POI_ID
 * @property int $IH_OrderDetailID
 * @property int $IH_RMAI_ID
 * @property string $IH_Action
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class InvHist extends Model{

    protected $table = "InvHist";
    protected $primaryKey = "IH_ID";

    // Your relationships...

}
