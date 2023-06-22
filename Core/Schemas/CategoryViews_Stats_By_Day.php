<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\CategoryViews_Stats_By_Day
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
