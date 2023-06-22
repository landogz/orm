<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Billing
 *
 * @property int $BillingID
 * @property int $CustomerID
 * @property string $BillingCompanyName
 * @property string $BillingFirstName
 * @property string $BillingLastName
 * @property string $BillingAddress1
 * @property string $BillingAddress2
 * @property string $BillingCity
 * @property string $BillingState
 * @property string $BillingPostalCode
 * @property string $BillingCountry
 * @property string $BillingPhoneNumber
 * @property string $BillingFaxNumber
 * @property string $BillingCHOSEN
 * @property \DateTime $LastModified
 
 */
class Billing extends Model{

    protected $table = "Billing";
    protected $primaryKey = "BillingID";

    // Your relationships...

}
