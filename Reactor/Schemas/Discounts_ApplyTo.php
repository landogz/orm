<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Discounts_ApplyTo
 *
 * @property int $SyncID
 * @property int $DiscountAutoID
 * @property string $ProductCode
 * @property int $CategoryID
 
 */
class Discounts_ApplyTo extends Model{

    protected $table = "Discounts_ApplyTo";
    protected $primaryKey = "SyncID";

    // Your relationships...

}
