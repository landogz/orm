<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\SessionLoginTokens
 *
 * @property int $SessionLoginTokenID
 * @property int $CustomerID
 * @property \DateTime $CreateDate
 * @property int $LoginToken
 
 */
class SessionLoginTokens extends Model{

    protected $table = "SessionLoginTokens";
    protected $primaryKey = "SessionLoginTokenID";

    // Your relationships...

}
