<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ArticleCategories
 *
 * @property int $ID
 * @property string $CategoryName
 * @property int $CategoryOrder
 * @property string $CategoryType
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class ArticleCategories extends Model{

    protected $table = "ArticleCategories";
    protected $primaryKey = "ID";

    // Your relationships...

}
