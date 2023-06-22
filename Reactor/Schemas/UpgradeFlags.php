<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\UpgradeFlags
 *
 * @property int $UF_ID
 * @property string $UF_Flag
 * @property string $UF_Version
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class UpgradeFlags extends Model{

    protected $table = "UpgradeFlags";
    protected $primaryKey = "UF_ID";

    // Your relationships...

}
