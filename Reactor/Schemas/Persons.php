<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Persons
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
class Persons extends Model{

    protected $table = "Persons";
    protected $primaryKey = "ID";

    // Your relationships...

}
