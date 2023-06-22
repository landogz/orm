<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\WebServiceType
 *
 * @property int $WebServiceTypeID
 * @property string $WebServiceTypeToken
 * @property string $WebServiceTypeDescription
 
 */
class WebServiceType extends Model{

    protected $table = "WebServiceType";
    protected $primaryKey = "WebServiceTypeID";

    // Your relationships...

}
