<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ConfigSetup
 *
 * @property string $DataName
 * @property string $DataType
 * @property string $DataValue
 * @property string $Description
 * @property string $ExampleValue
 * @property string $ConfigSetupGroup
 * @property string $PrivatePage
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $ReadOnly
 * @property string $Hidden
 * @property string $Dropdown_Choices
 * @property string $FriendlyName
 
 */
class ConfigSetup extends Model{

    protected $table = "ConfigSetup";
    protected $primaryKey = null;

    // Your relationships...

}
