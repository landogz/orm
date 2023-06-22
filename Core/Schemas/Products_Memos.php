<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Products_Memos
 *
 * @property int $ProductID
 * @property mixed $ProductFeatures
 * @property mixed $TechSpecs
 * @property mixed $ExtInfo
 * @property mixed $OrderFinished_Note
 * @property string $METATAG_Keywords
 * @property mixed $ProductDescription_AbovePricing
 * @property mixed $CUSTOM_METATAGS_OVERRIDE
 
 */
class Products_Memos extends Model{

    protected $table = "Products_Memos";
    protected $primaryKey = null;

    // Your relationships...

}
