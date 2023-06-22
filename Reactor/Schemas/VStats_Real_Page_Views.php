<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\VStats_Real_Page_Views
 *
 * @property mixed $ID_VStats_Real_Page_Views
 * @property mixed $ID_VStats_Real_Profiles
 * @property int $KPI
 * @property mixed $ID_Order
 * @property int $SSL
 * @property int $Domain
 * @property int $Page
 * @property string $Query_String
 * @property mixed $Internal_Referrer
 * @property mixed $LastModified
 
 */
class VStats_Real_Page_Views extends Model{

    protected $table = "VStats_Real_Page_Views";
    protected $primaryKey = "ID_VStats_Real_Page_Views";

    // Your relationships...

}
