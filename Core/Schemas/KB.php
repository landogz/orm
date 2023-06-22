<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\KB
 *
 * @property int $KB_ID
 * @property string $Title
 * @property mixed $Body
 * @property string $Keywords
 * @property string $Private
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class KB extends Model{

    protected $table = "KB";
    protected $primaryKey = "KB_ID";

    // Your relationships...

}
