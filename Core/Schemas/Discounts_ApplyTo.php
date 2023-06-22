<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Discounts_ApplyTo
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
