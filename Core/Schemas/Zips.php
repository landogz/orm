<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Zips
 *
 * @property string $StateFipsCode
 * @property string $Zip
 * @property string $State
 * @property string $ZipName
 * @property float $Longitude
 * @property float $Latitude
 * @property int $1990Population
 * @property float $AllocationFactor
 
 */
class Zips extends Model{

    protected $table = "Zips";
    protected $primaryKey = null;

    // Your relationships...

}
