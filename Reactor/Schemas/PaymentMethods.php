<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\PaymentMethods
 *
 * @property int $PaymentMethodID
 * @property string $PaymentMethodType
 * @property string $PaymentMethod
 * @property string $PaymentMethodActive
 * @property string $PaymentOrderBy
 * @property \DateTime $LastModified
 * @property string $PaymentMethod_SpecialValue1
 * @property string $PaymentMethod_SpecialValue2
 * @property int $LastModBy
 * @property string $PaymentMethod_SpecialValue3
 * @property int $Hidden
 * @property string $Restrict_Method
 
 */
class PaymentMethods extends Model{

    protected $table = "PaymentMethods";
    protected $primaryKey = "PaymentMethodID";

    // Your relationships...

}
