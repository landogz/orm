<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\FB_Referral_Store_Link
 *
 * @property int $ID
 * @property string $FB_ReferralCode
 * @property string $FB_CampaignID
 * @property string $FB_ConversionID
 * @property string $V_Version
 * @property int $V_OrderDetailID
 * @property int $Status
 
 */
class FB_Referral_Store_Link extends Model{

    protected $table = "FB_Referral_Store_Link";
    protected $primaryKey = "ID";

    // Your relationships...

}
