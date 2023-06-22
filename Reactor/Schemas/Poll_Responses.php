<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Poll_Responses
 *
 * @property int $Poll_R_ID
 * @property int $Poll_Q_ID
 * @property string $Poll_R_Answer
 * @property int $Poll_R_OrderBy
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Poll_Responses extends Model{

    protected $table = "Poll_Responses";
    protected $primaryKey = "Poll_R_ID";

    // Your relationships...

}
