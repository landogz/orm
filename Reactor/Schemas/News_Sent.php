<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\News_Sent
 *
 * @property int $NS_ID
 * @property int $News_ID
 * @property int $ID_Newsletter_Email_Addresses
 * @property string $NS_Opened
 * @property string $NS_Clicked
 * @property string $NS_Bounced
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class News_Sent extends Model{

    protected $table = "News_Sent";
    protected $primaryKey = "NS_ID";

    // Your relationships...

}
