<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Flags
 *
 * @property string $Flag_Title
 * @property string $Flag_Complete
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Flags extends Model{

    protected $table = "Flags";
    protected $primaryKey = null;

    // Your relationships...

}
