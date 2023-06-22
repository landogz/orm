<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\ReviewsHelpful
 *
 * @property int $ID
 * @property int $CustomerID
 * @property int $ReviewID
 * @property \DateTime $LastModified
 
 */
class ReviewsHelpful extends Model{

    protected $table = "ReviewsHelpful";
    protected $primaryKey = "ID";

    // Your relationships...

}
