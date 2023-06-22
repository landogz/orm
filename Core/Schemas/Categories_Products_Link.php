<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Categories_Products_Link
 *
 * @property int $ID
 * @property int $ProductID
 * @property int $CategoryID
 * @property string $Auto_Maintenance_Column
 
 */
class Categories_Products_Link extends Model{

    protected $table = "Categories_Products_Link";
    protected $primaryKey = "ID";

    // Your relationships...

}
