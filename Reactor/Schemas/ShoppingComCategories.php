<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ShoppingComCategories
 *
 * @property int $CategoryID
 * @property string $CategoryDescription
 * @property int $ParentCategoryID
 
 */
class ShoppingComCategories extends Model{

    protected $table = "ShoppingComCategories";
    protected $primaryKey = null;

    // Your relationships...

}
