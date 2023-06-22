<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\WishLists
 *
 * @property int $WL_ID
 * @property int $WL_CustomerID
 * @property string $WL_ProductCode
 * @property string $WL_OptionIDs
 
 */
class WishLists extends Model{

    protected $table = "WishLists";
    protected $primaryKey = "WL_ID";

    // Your relationships...

}
