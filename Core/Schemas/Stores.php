<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Stores
 *
 * @property int $ID
 * @property string $StoreName
 * @property string $StoreAddress
 * @property string $StoreCity
 * @property string $StoreState
 * @property string $StoreZip
 * @property string $StorePhone
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property mixed $StoreDesc
 
 */
class Stores extends Model{

    protected $table = "Stores";
    protected $primaryKey = "ID";

    // Your relationships...

}
