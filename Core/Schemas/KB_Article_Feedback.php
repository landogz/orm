<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\KB_Article_Feedback
 *
 * @property int $ID_KB_Article_Feedback
 * @property int $KB_ID
 * @property int $Rating
 * @property string $Comments
 * @property string $IPAddress
 * @property mixed $LastModified
 * @property int $LastModBy
 
 */
class KB_Article_Feedback extends Model{

    protected $table = "KB_Article_Feedback";
    protected $primaryKey = "ID_KB_Article_Feedback";

    // Your relationships...

}
