<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ShoppingComParentCategories
 *
 * @property int $ParentCategoryID
 * @property string $ParentCategoryDescription
 
 */
class ShoppingComParentCategories extends Model{

    protected $table = "ShoppingComParentCategories";
    protected $primaryKey = null;

    // Your relationships...

}
