<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\AdminHistory_URLs
 *
 * @property int $ID_AdminHistory_URLs
 * @property string $URL
 
 */
class AdminHistory_URLs extends Model{

    protected $table = "AdminHistory_URLs";
    protected $primaryKey = "ID_AdminHistory_URLs";

    // Your relationships...

}
