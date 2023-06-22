<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\GCR_Country
 *
 * @property int $GCR_CountryID
 * @property string $GCR_Country_DisplayName
 * @property string $GCR_Country_Code
 
 */
class GCR_Country extends Model{

    protected $table = "GCR_Country";
    protected $primaryKey = "GCR_CountryID";

    // Your relationships...

}
