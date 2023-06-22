<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Training
 *
 * @property int $ID
 * @property int $Course
 * @property int $Step_Order
 * @property string $Step_Key
 * @property string $Step_Title
 * @property string $Step_Link
 * @property string $Completed
 * @property \DateTime $LastModified
 
 */
class Training extends Model{

    protected $table = "Training";
    protected $primaryKey = "ID";

    // Your relationships...

}
