<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\WebServiceType
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
