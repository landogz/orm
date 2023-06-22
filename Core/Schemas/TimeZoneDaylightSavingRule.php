<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\TimeZoneDaylightSavingRule
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
