<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\DealsOfTheDay
 *
 * @property int $Id
 * @property int $ProductId
 * @property string $DealPrice
 * @property string $DealHeadline
 * @property int $UseProductDescription
 * @property string $CustomDescription
 * @property mixed $BeginDate
 * @property mixed $EndDate
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class DealsOfTheDay extends Model{

    protected $table = "DealsOfTheDay";
    protected $primaryKey = "Id";

    // Your relationships...

}
