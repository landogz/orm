<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Shipping
 *
 * @property int $ShipID
 * @property int $CustomerID
 * @property string $ShipCompanyName
 * @property string $ShipFirstName
 * @property string $ShipLastName
 * @property string $ShipAddress1
 * @property string $ShipAddress2
 * @property string $ShipCity
 * @property string $ShipState
 * @property string $ShipPostalCode
 * @property string $ShipCountry
 * @property string $ShipPhoneNumber
 * @property string $ShipFaxNumber
 * @property string $ShipCHOSEN
 * @property \DateTime $LastModified
 * @property string $ShipResidential
 
 */
class Shipping extends Model{

    protected $table = "Shipping";
    protected $primaryKey = "ShipID";

    // Your relationships...

}
