<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\AffiliateTrack
 *
 * @property int $ClickTrackID
 * @property int $AffiliateID
 * @property double $Percentage
 
 */
class AffiliateTrack extends Model{

    protected $table = "AffiliateTrack";
    protected $primaryKey = null;

    // Your relationships...

}
