<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OptionCategories
 *
 * @property int $ID
 * @property string $HeadingGroup
 * @property string $OptionCategoriesDesc
 * @property string $IsRequired
 * @property string $DisplayType
 * @property int $ArrangeOptionCategoriesBy
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $Hide_OptionCategoriesDesc
 * @property string $Include_In_Search_Refinement
 * @property mixed $AboutOptionCategories
 * @property string $Use_Google_Size
 * @property string $Use_Google_Color
 * @property string $Use_Google_Material
 * @property string $Use_Google_Pattern
 
 */
class OptionCategories extends Model{

    protected $table = "OptionCategories";
    protected $primaryKey = "ID";

    // Your relationships...

}
