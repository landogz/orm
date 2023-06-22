<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ReEncrypt_Customers
 *
 * @property int $CustomerID
 * @property string $Password
 * @property string $TaxID
 
 */
class ReEncrypt_Customers extends Model{

    protected $table = "ReEncrypt_Customers";
    protected $primaryKey = null;

    // Your relationships...

}
