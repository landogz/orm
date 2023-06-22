<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Filter_Categories
 *
 * @property int $ProductID
 * @property int $ParentCategoryID
 * @property string $ParentCategoryName
 * @property int $CategoryID
 * @property string $CategoryName
 
 */
class Filter_Categories extends Model{

    protected $table = "Filter_Categories";
    protected $primaryKey = null;

    // Your relationships...

}
