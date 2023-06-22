<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\tbl_Session
 *
 * @property int $ID
 * @property \DateTime $LastModified
 
 */
class tbl_Session extends Model{

    protected $table = "tbl_Session";
    protected $primaryKey = "ID";

    // Your relationships...

}
