<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Stock_History
 *
 * @property int $ID
 * @property int $ProductID
 * @property int $Previous_Stock
 * @property int $New_Stock
 * @property string $Event
 * @property int $EventID
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Stock_History extends Model{

    protected $table = "Stock_History";
    protected $primaryKey = "ID";

    // Your relationships...

}
