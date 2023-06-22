<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\AdminPrefs
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
