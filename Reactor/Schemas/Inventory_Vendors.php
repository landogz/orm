<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Inventory_Vendors
 *
 * @property int $IV_ID
 * @property string $Name
 * @property string $Login_Username
 * @property string $Login_Password
 * @property string $Custom1
 * @property string $Custom2
 * @property string $Custom3
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Inventory_Vendors extends Model{

    protected $table = "Inventory_Vendors";
    protected $primaryKey = "IV_ID";

    // Your relationships...

}
