<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\AdminHistory_EditLog
 *
 * @property int $AH_ID
 * @property int $AH_Updated
 * @property int $AH_Deleted
 * @property mixed $AH_BulkUpdate
 
 */
class AdminHistory_EditLog extends Model{

    protected $table = "AdminHistory_EditLog";
    protected $primaryKey = null;

    // Your relationships...

}
