<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\ReEncrypt_Customers
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
