<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Poll_Questions
 *
 * @property int $Poll_Q_ID
 * @property int $Poll_ID
 * @property string $Poll_Q_Question
 * @property string $Poll_Q_Type
 * @property int $Poll_Q_Type_Size
 * @property int $Poll_Q_Type_Rows
 * @property string $Poll_Q_Required
 * @property int $Poll_Q_OrderBy
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Poll_Questions extends Model{

    protected $table = "Poll_Questions";
    protected $primaryKey = "Poll_Q_ID";

    // Your relationships...

}
