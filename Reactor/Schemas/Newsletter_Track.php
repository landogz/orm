<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Newsletter_Track
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
