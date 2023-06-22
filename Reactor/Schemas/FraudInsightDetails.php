<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\FraudInsightDetails
 *
 * @property int $ID
 * @property string $FraudInsightID
 * @property mixed $DateAdded
 * @property mixed $DateUpdated
 * @property int $OrderID
 * @property int $Score
 * @property int $IsHighRiskEmail
 * @property int $IsHighRiskShippingAddress
 * @property int $IsAnonymousProxy
 * @property int $ShippingIpAndCountryMatch
 * @property int $IsHighRiskIp
 * @property int $IsHighRiskBillingAddress
 * @property int $IsPostalInCityShippingAddress
 * @property int $IsPostalInCityBillingAddress
 * @property string $IpRiskScore
 * @property int $DistanceToIpLocationBillingInMiles
 * @property int $DistanceToIpLocationShippingInMiles
 * @property int $DistanceToBillingAddressFromShippingInMiles
 * @property string $City
 * @property string $Region
 * @property string $Country
 * @property string $LatitudeBilling
 * @property string $LongitudeBilling
 * @property string $LatitudeShipping
 * @property string $LongitudeShipping
 * @property string $LatitudeIp
 * @property string $LongitudeIp
 * @property string $PostalCode
 * @property string $IpAddress
 * @property int $IsEmailFree
 * @property mixed $EmailFirstSeen
 * @property string $UserType
 * @property int $BillingIpAndCountryMatch
 
 */
class FraudInsightDetails extends Model{

    protected $table = "FraudInsightDetails";
    protected $primaryKey = "ID";

    // Your relationships...

}
