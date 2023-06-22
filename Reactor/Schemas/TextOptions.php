<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\TextOptions
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
