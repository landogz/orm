<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ClickTrack
 *
 * @property int $ClickTrackID
 * @property int $CustomerID
 * @property string $IPAddress
 * @property string $Referer
 * @property \DateTime $LastModified
 
 */
class ClickTrack extends Model{

    protected $table = "ClickTrack";
    protected $primaryKey = "ClickTrackID";

    // Your relationships...

}
