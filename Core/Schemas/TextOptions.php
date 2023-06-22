<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\TextOptions
 *
 * @property int $TextOptionID
 * @property string $OptionID
 * @property string $Text
 * @property \DateTime $LastModified
 
 */
class TextOptions extends Model{

    protected $table = "TextOptions";
    protected $primaryKey = "TextOptionID";

    // Your relationships...

}
