<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Options_ApplyTo
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
