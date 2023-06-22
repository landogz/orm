<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ProductViews_Stats_Report_Cache
 *
 * @property int $ID
 * @property \DateTime $BegDate
 * @property \DateTime $EndDate
 * @property int $ProductID
 * @property int $HitCount
 * @property mixed $CreatedDate
 
 */
class ProductViews_Stats_Report_Cache extends Model{

    protected $table = "ProductViews_Stats_Report_Cache";
    protected $primaryKey = "ID";

    // Your relationships...

}
