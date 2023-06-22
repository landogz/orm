<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Polls
 *
 * @property int $Poll_ID
 * @property string $Poll_Name
 * @property string $Poll_Submit_Btn_Text
 * @property \DateTime $Poll_BeginDate
 * @property \DateTime $Poll_EndDate
 * @property string $Poll_Location
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property mixed $Poll_Description
 
 */
class Polls extends Model{

    protected $table = "Polls";
    protected $primaryKey = "Poll_ID";

    // Your relationships...

}
