<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\AffiliatePayTempData
 *
 * @property int $ClickTrackId
 * @property int $AffiliateId
 * @property string $OrderStatus
 * @property string $Returned
 * @property float $Affiliate_Commissionable_Value
 * @property double $Percentage
 * @property mixed $LastModified
 
 */
class AffiliatePayTempData extends Model{

    protected $table = "AffiliatePayTempData";
    protected $primaryKey = null;

    // Your relationships...

}
