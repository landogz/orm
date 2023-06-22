<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\SearchTerms
 *
 * @property int $ID
 * @property string $SearchTerm
 * @property string $IPAddress
 * @property mixed $LastModified
 
 */
class SearchTerms extends Model{

    protected $table = "SearchTerms";
    protected $primaryKey = "ID";

    // Your relationships...

}
