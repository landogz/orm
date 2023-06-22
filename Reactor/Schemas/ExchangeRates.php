<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ExchangeRates
 *
 * @property int $ER_ID
 * @property string $Currency
 * @property string $Symbol
 * @property float $ExchangeRate
 * @property string $IsDefault
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $PayPal_CurrencyCode
 * @property string $CurrencyType
 
 */
class ExchangeRates extends Model{

    protected $table = "ExchangeRates";
    protected $primaryKey = "ER_ID";

    // Your relationships...

}
