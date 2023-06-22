<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Customizable_Admin_Links
 *
 * @property int $ID
 * @property int $CustomerID
 * @property string $Text
 * @property string $URL
 * @property string $URL_Target
 * @property string $Section
 * @property int $SortOrder
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Customizable_Admin_Links extends Model{

    protected $table = "Customizable_Admin_Links";
    protected $primaryKey = "ID";

    // Your relationships...

}
