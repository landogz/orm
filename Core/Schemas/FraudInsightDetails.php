<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\FraudInsightDetails
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
 * @property double $IpRiskScore
 * @property int $DistanceToIpLocationBillingInMiles
 * @property int $DistanceToIpLocationShippingInMiles
 * @property int $DistanceToBillingAddressFromShippingInMiles
 * @property string $City
 * @property string $Region
 * @property string $Country
 * @property double $LatitudeBilling
 * @property double $LongitudeBilling
 * @property double $LatitudeShipping
 * @property double $LongitudeShipping
 * @property double $LatitudeIp
 * @property double $LongitudeIp
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
