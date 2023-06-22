<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ShoppingComCategories
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
