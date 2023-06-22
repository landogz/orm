<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Vendors_PL
 *
 * @property int $VPL_ID
 * @property int $VPL_Vendor_ID
 * @property string $VPL_ProductCode
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class Vendors_PL extends Model{

    protected $table = "Vendors_PL";
    protected $primaryKey = "VPL_ID";

    // Your relationships...

}
