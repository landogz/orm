<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Session
 *
 * @property int $ID
 * @property \DateTime $LastModified
 
 */
class tbl_Session extends Model{

    protected $table = "tbl_Session";
    protected $primaryKey = "ID";

    // Your relationships...

}
