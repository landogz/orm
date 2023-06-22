<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ProviderTax
 *
 * @property int $Id
 * @property string $SalesTaxModel
 * @property string $Zipcode
 * @property string $StateCode
 * @property string $StateName
 * @property string $CountyName
 * @property string $CityName
 * @property int $IsActive
 * @property mixed $Added
 * @property mixed $Updated
 * @property mixed $EffectiveDate
 
 */
class ProviderTax extends Model{

    protected $table = "ProviderTax";
    protected $primaryKey = "Id";

    // Your relationships...

}
