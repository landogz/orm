<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\TimeZones
 *
 * @property int $TimeZonesID
 * @property int $TimeZoneDaylightSavingRuleID
 * @property string $TimeZoneDesc
 * @property string $HH
 * @property string $MM
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $AbbStandard
 * @property string $AbbDaylight
 
 */
class TimeZones extends Model{

    protected $table = "TimeZones";
    protected $primaryKey = "TimeZonesID";

    // Your relationships...

}
