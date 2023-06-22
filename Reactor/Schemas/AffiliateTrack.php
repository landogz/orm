<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\AffiliateTrack
 *
 * @property int $ClickTrackID
 * @property int $AffiliateID
 * @property string $Percentage
 
 */
class AffiliateTrack extends Model{

    protected $table = "AffiliateTrack";
    protected $primaryKey = null;

    // Your relationships...

}
