<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Products_Options_ApplyTo_IDs
 *
 * @property string $ProductCode
 * @property string $OptionIDs
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Products_Options_ApplyTo_IDs extends Model{

    protected $table = "Products_Options_ApplyTo_IDs";
    protected $primaryKey = null;

    // Your relationships...

}
