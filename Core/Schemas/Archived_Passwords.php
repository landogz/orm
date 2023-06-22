<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Archived_Passwords
 *
 * @property int $ID
 * @property string $EmailAddress
 * @property string $Password
 * @property \DateTime $Date_Archived
 
 */
class Archived_Passwords extends Model{

    protected $table = "Archived_Passwords";
    protected $primaryKey = "ID";

    // Your relationships...

}
