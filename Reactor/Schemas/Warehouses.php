<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Warehouses
 *
 * @property int $ID_Warehouses
 * @property string $Warehouse_Name
 * @property string $Country
 * @property string $State
 * @property string $PostalCode
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Warehouses extends Model{

    protected $table = "Warehouses";
    protected $primaryKey = "ID_Warehouses";

    // Your relationships...

}
