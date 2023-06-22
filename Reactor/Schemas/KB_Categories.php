<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\KB_Categories
 *
 * @property int $ID_KB_Categories
 * @property int $ParentID
 * @property string $Name
 * @property string $Description
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class KB_Categories extends Model{

    protected $table = "KB_Categories";
    protected $primaryKey = "ID_KB_Categories";

    // Your relationships...

}
