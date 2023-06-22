<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_EDI_Variables
 *
 * @property int $ID_tbl_EDI_Variables
 * @property string $Company_Name
 * @property string $DataName
 * @property string $DataValue
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $ThirdPartyValue
 * @property string $ThirdPartyAltValue
 * @property \DateTime $LastSent
 
 */
class tbl_EDI_Variables extends Model{

    protected $table = "tbl_EDI_Variables";
    protected $primaryKey = "ID_tbl_EDI_Variables";

    // Your relationships...

}
