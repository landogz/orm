<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Newsletter_Track
 *
 * @property int $News_ID
 * @property \DateTime $First_Email_Sent
 * @property \DateTime $Last_Email_Sent
 
 */
class Newsletter_Track extends Model{

    protected $table = "Newsletter_Track";
    protected $primaryKey = null;

    // Your relationships...

}
