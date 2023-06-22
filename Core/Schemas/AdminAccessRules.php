<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\AdminAccessRules
 *
 * @property int $AAR_ID
 * @property int $AAR_CustomerID
 * @property string $AAR_Products
 * @property string $AAR_Product_Keys
 * @property string $AAR_Discounts
 * @property string $AAR_GiftCards
 * @property string $AAR_Customers
 * @property string $AAR_LoginAsCustomer
 * @property string $AAR_Reviews
 * @property string $AAR_Affiliates
 * @property string $AAR_ConfigSetup
 * @property string $AAR_PaymentMethods
 * @property string $AAR_Vendors
 * @property string $AAR_POs
 * @property string $AAR_Orders
 * @property string $AAR_CreditCards
 * @property string $AAR_Articles
 * @property string $AAR_Newsletters
 * @property string $AAR_Categories
 * @property string $AAR_Specials
 * @property string $AAR_Import
 * @property string $AAR_Export
 * @property string $AAR_AdminHistory
 * @property string $AAR_LiveEdit
 * @property string $AAR_Inventory
 * @property string $AAR_ShippingMethods
 * @property string $AAR_Locations
 * @property string $AAR_Tax
 * @property string $AAR_ROITracker
 * @property string $AAR_StoreStats
 * @property string $AAR_WebsiteDesign
 * @property string $AAR_BrandingImages
 * @property string $AAR_Maintenance
 * @property string $AAR_BulkUpdates
 * @property string $AAR_Administrators
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $AAR_CRM_Manager
 * @property string $AAR_ReleaseNotes
 * @property string $AAR_Social
 * @property string $AAR_DealOfTheDay
 * @property string $AAR_SocialStore
 * @property string $AAR_API
 * @property string $AAR_MyRewards
 * @property string $AAR_GoogleCustomerReviews
 * @property string $AAR_reCaptcha
 
 */
class AdminAccessRules extends Model{

    protected $table = "AdminAccessRules";
    protected $primaryKey = "AAR_ID";

    // Your relationships...

}
