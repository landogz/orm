<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\SearchTerms
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
