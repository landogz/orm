<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\VStats_Raw_Page_Views
 *
 * @property mixed $ID_VStats_Raw_Page_Views
 * @property mixed $ID_VStats_Raw_Profiles
 * @property string $KPI
 * @property mixed $ID_Customer
 * @property mixed $ID_Order
 * @property int $SSL
 * @property string $Domain
 * @property string $Page
 * @property string $Query_String
 * @property mixed $Internal_Referrer
 * @property mixed $LastModified
 
 */
class VStats_Raw_Page_Views extends Model{

    protected $table = "VStats_Raw_Page_Views";
    protected $primaryKey = "ID_VStats_Raw_Page_Views";

    // Your relationships...

}
