<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ExternalOrdersExceptionLog
 *
 * @property int $ExternalOrderExceptionID
 * @property string $ExternalOrderType
 * @property string $ExternalOrderID
 * @property string $ExceptionMessage
 * @property mixed $CreateDateTime
 * @property string $ExternalOrderUrl
 * @property string $ExternalOrderStatus
 
 */
class ExternalOrdersExceptionLog extends Model{

    protected $table = "ExternalOrdersExceptionLog";
    protected $primaryKey = "ExternalOrderExceptionID";

    // Your relationships...

}
