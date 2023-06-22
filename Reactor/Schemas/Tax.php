<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Tax
 *
 * @property int $TaxID
 * @property string $TaxStateSHORT
 * @property string $TaxStateLONG
 * @property string $TaxCountry
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $Tax1_Title
 * @property string $Tax2_Title
 * @property string $Tax3_Title
 * @property float $Tax1_Percent
 * @property float $Tax2_Percent
 * @property float $Tax3_Percent
 * @property string $TaxPostalCode
 * @property string $TaxDefault
 * @property string $IsVAT
 * @property int $Tax2_IncludePrevious
 * @property int $Tax3_IncludePrevious
 * @property string $Tax1_IgnoreNoTaxRules
 * @property string $Tax2_IgnoreNoTaxRules
 * @property string $Tax3_IgnoreNoTaxRules
 
 */
class Tax extends Model{

    protected $table = "Tax";
    protected $primaryKey = "TaxID";

    // Your relationships...

}
