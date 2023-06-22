<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Custom_Fields
 *
 * @property int $Custom_Fields_ID
 * @property string $Alias
 * @property string $Table_Name
 * @property string $Question
 * @property string $Question_SubText
 * @property string $Input_Type
 * @property int $Input_MaxLength
 * @property int $Placement_Order
 * @property string $Is_Required
 * @property string $Is_Public
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $Show_On_Invoices
 * @property int $ShowOnMobile
 
 */
class Custom_Fields extends Model{

    protected $table = "Custom_Fields";
    protected $primaryKey = "Custom_Fields_ID";

    // Your relationships...

}
