<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Affiliates
 *
 * @property int $AffiliateID
 * @property int $ParentID
 * @property float $Percent1
 * @property float $Percent2
 * @property float $Percent3
 * @property float $Percent4
 * @property float $Percent5
 * @property \DateTime $LastModified
 * @property int $DaysToTrack
 * @property string $AffiliateType
 * @property int $News_ID
 * @property int $LastModBy
 * @property string $Group_Title
 
 */
class Affiliates extends Model{

    protected $table = "Affiliates";
    protected $primaryKey = null;

    // Your relationships...

}
