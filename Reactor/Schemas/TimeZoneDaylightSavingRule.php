<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\TimeZoneDaylightSavingRule
 *
 * @property int $TimeZoneDaylightSavingRuleID
 * @property string $Region
 * @property string $Description
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class TimeZoneDaylightSavingRule extends Model{

    protected $table = "TimeZoneDaylightSavingRule";
    protected $primaryKey = "TimeZoneDaylightSavingRuleID";

    // Your relationships...

}
