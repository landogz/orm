<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CategoryViews_Stats_By_Day
 *
 * @property int $ID
 * @property \DateTime $StatDate
 * @property int $AllRecordsCombinedForThisDay
 * @property int $CategoryID
 * @property int $HitCount
 
 */
class CategoryViews_Stats_By_Day extends Model{

    protected $table = "CategoryViews_Stats_By_Day";
    protected $primaryKey = "ID";

    // Your relationships...

}
