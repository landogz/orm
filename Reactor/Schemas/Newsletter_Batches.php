<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Newsletter_Batches
 *
 * @property int $News_ID
 * @property int $ID_Newsletter_Email_Addresses
 * @property string $Sent
 
 */
class Newsletter_Batches extends Model{

    protected $table = "Newsletter_Batches";
    protected $primaryKey = null;

    // Your relationships...

}
