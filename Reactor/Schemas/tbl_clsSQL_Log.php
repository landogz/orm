<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\tbl_clsSQL_Log
 *
 * @property int $ID
 * @property string $SQL
 * @property string $ParamName
 * @property mixed $ParamValue
 
 */
class tbl_clsSQL_Log extends Model{

    protected $table = "tbl_clsSQL_Log";
    protected $primaryKey = "ID";

    // Your relationships...

}
