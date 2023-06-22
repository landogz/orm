<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ArticleCategories
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
