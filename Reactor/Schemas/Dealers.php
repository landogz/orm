<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Dealers
 *
 * @property int $ID
 * @property string $DealerCustomerID
 * @property string $DealerPDF
 * @property string $DealerStore
 * @property string $PremiseStreet
 * @property string $PremiseCity
 * @property string $PremiseState
 * @property string $PremiseZipCode
 * @property string $PremisePhone
 * @property string $ExpireDate
 * @property string $CreatedAt
 
 */
class Dealers extends Model{

    protected $table = "Dealers";
    protected $primaryKey = "ID";

    // Your relationships...

}
