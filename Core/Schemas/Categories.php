<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Categories
 *
 * @property int $CategoryID
 * @property int $ParentID
 * @property string $CategoryName
 * @property int $CategoryOrder
 * @property string $CategoryVisible
 * @property string $AlternateURL
 * @property \DateTime $LastModified
 * @property string $Category_DisplayMode
 * @property string $SubCategory_DisplayMode1
 * @property string $SubCategory_DisplayMode2
 * @property int $Display_Columns
 * @property int $Display_Rows
 * @property string $Display_SHOWlistprice
 * @property string $Display_SHOWsaleprice
 * @property string $Display_SHOWyousave
 * @property string $Display_SHOWdescriptionSHORT
 * @property string $Display_SHOWdescription
 * @property string $Display_SHOWstockstatus
 * @property string $Display_SHOWavailability
 * @property string $Display_FeaturedProductsOnly
 * @property int $SubCategory_DisplayMode2_Columns
 * @property int $RootID
 * @property string $METATAG_Title
 * @property string $METATAG_Description
 * @property string $Default_SortBy
 * @property string $Link_Title_Tag
 * @property int $LastModBy
 * @property string $category_graphic_placement
 * @property int $SubCategory_DisplayColumns
 * @property string $FilterCategory
 * @property int $Auto_Maintained_OptionCatID
 * @property int $Auto_Maintained_OptionID
 * @property string $Private_Section_Customers_Only
 * @property mixed $CategoryDescriptionSHORT
 * @property mixed $CategoryDescription
 * @property mixed $METATAG_Keywords
 * @property mixed $CategoryDescription_BelowProducts
 * @property mixed $Custom_Where_Clause
 * @property mixed $CUSTOM_METATAGS_OVERRIDE
 * @property string $AlternateURL_OpenNewWindow
 * @property string $Hidden
 * @property string $Display_SHOWpoints
 * @property string $VCompareOptOut
 * @property mixed $Breadcrumb
 * @property int $PhotoSeed
 * @property string $SubCategory_DisplayMode1_Responsive
 * @property int $SubCategory_DisplayColumns_Responsive
 * @property string $Category_DisplayMode_Responsive
 * @property int $Display_Columns_Responsive
 * @property string $SubCategory_DisplayMode2_Responsive
 * @property string $VendorCategory
 
 */
class Categories extends Model{

    protected $table = "Categories";
    protected $primaryKey = "CategoryID";

    // Your relationships...

}
