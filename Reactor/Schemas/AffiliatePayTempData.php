<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\AffiliatePayTempData
 *
 * @property int $ClickTrackId
 * @property int $AffiliateId
 * @property string $OrderStatus
 * @property string $Returned
 * @property string $Affiliate_Commissionable_Value
 * @property string $Percentage
 * @property mixed $LastModified
 
 */
class AffiliatePayTempData extends Model{

    protected $table = "AffiliatePayTempData";
    protected $primaryKey = null;

    // Your relationships...

}
