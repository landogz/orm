<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Customers
 *
 * @property int $CustomerID
 * @property string $AccessKey
 * @property string $Password
 * @property string $FirstName
 * @property string $LastName
 * @property string $CompanyName
 * @property string $BillingAddress1
 * @property string $BillingAddress2
 * @property string $City
 * @property string $State
 * @property string $PostalCode
 * @property string $Country
 * @property string $PhoneNumber
 * @property string $FaxNumber
 * @property string $EmailAddress
 * @property string $PaysStateTax
 * @property string $TaxID
 * @property string $EmailSubscriber
 * @property string $CatalogSubscriber
 * @property \DateTime $LastLogin
 * @property \DateTime $LastModified
 * @property float $PercentDiscount
 * @property string $WebsiteAddress
 * @property string $DiscountLevel
 * @property \DateTime $FirstDateVisited
 * @property \DateTime $FirstOrderDate
 * @property string $CustomerType
 * @property int $LoginAttempts
 * @property \DateTime $LastLoginAttempt
 * @property int $LastModBy
 * @property string $Customer_IsAnonymous
 * @property string $IsSuperAdmin
 * @property string $news1
 * @property string $news2
 * @property string $news3
 * @property string $news4
 * @property string $news5
 * @property string $news6
 * @property string $news7
 * @property string $news8
 * @property string $news9
 * @property string $news10
 * @property string $news11
 * @property string $news12
 * @property string $news13
 * @property string $news14
 * @property string $news15
 * @property string $news16
 * @property string $news17
 * @property string $news18
 * @property string $news19
 * @property string $news20
 * @property string $Allow_Access_To_Private_Sections
 * @property string $Checkbox_For_New_Customers
 * @property mixed $Customer_Notes
 * @property int $SalesRep_CustomerID
 * @property int $ID_Customers_Groups
 * @property string $Custom_Field_Custom1
 * @property string $Custom_Field_Custom2
 * @property string $Custom_Field_Custom3
 * @property string $Custom_Field_Custom4
 * @property string $Custom_Field_Custom5
 * @property string $Removed_From_Rewards
 * @property string $RestrictedPaymentMethodIDs
 
 */
class Customers extends Model{

    protected $table = "Customers";
    protected $primaryKey = "CustomerID";

    // Your relationships...

}
