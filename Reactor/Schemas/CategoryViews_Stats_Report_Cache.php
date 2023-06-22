<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\CategoryViews_Stats_Report_Cache
 *
 * @property int $ID
 * @property \DateTime $BegDate
 * @property \DateTime $EndDate
 * @property int $CategoryID
 * @property int $HitCount
 * @property mixed $CreatedDate
 
 */
class CategoryViews_Stats_Report_Cache extends Model{

    protected $table = "CategoryViews_Stats_Report_Cache";
    protected $primaryKey = "ID";

    // Your relationships...

}
