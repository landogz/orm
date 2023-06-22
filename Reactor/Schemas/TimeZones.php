<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\TimeZones
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
