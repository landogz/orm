<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Poll_Stats
 *
 * @property int $PStats_ID
 * @property int $Poll_ID
 * @property int $CustomerID
 * @property int $Poll_R_ID
 * @property \DateTime $DateCreated
 * @property \DateTime $LastModified
 * @property mixed $Poll_R_Text
 
 */
class Poll_Stats extends Model{

    protected $table = "Poll_Stats";
    protected $primaryKey = "PStats_ID";

    // Your relationships...

}
