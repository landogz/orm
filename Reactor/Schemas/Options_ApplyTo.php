<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Options_ApplyTo
 *
 * @property int $SyncID
 * @property int $OptionID
 * @property string $ProductCode
 
 */
class Options_ApplyTo extends Model{

    protected $table = "Options_ApplyTo";
    protected $primaryKey = "SyncID";

    // Your relationships...

}
