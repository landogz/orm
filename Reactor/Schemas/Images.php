<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Images
 *
 * @property int $GUID
 * @property mixed $Binary_Image
 * @property string $System
 * @property \DateTime $Date_Created
 
 */
class Images extends Model{

    protected $table = "Images";
    protected $primaryKey = null;

    // Your relationships...

}
