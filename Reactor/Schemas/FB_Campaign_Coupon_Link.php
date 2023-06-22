<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\FB_Campaign_Coupon_Link
 *
 * @property int $ID
 * @property string $CampaignID
 * @property string $CouponCode
 
 */
class FB_Campaign_Coupon_Link extends Model{

    protected $table = "FB_Campaign_Coupon_Link";
    protected $primaryKey = "ID";

    // Your relationships...

}
