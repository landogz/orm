<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Specials
 *
 * @property int $ID
 * @property string $Hidden
 * @property string $Side
 * @property string $Page
 * @property int $SpecialOrder
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property mixed $HTML_Override
 * @property mixed $Record_Note
 * @property string $GroupName
 
 */
class Specials extends Model{

    protected $table = "Specials";
    protected $primaryKey = "ID";

    // Your relationships...

}
