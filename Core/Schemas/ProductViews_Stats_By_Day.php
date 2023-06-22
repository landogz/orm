<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ProductViews_Stats_By_Day
 *
 * @property int $ID
 * @property \DateTime $StatDate
 * @property int $AllRecordsCombinedForThisDay
 * @property int $ProductID
 * @property int $HitCount
 
 */
class ProductViews_Stats_By_Day extends Model{

    protected $table = "ProductViews_Stats_By_Day";
    protected $primaryKey = "ID";

    // Your relationships...

}
