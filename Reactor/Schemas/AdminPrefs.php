<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\AdminPrefs
 *
 * @property int $CustomerID
 * @property string $KeyName
 * @property string $KeyValue
 
 */
class AdminPrefs extends Model{

    protected $table = "AdminPrefs";
    protected $primaryKey = null;

    // Your relationships...

}
