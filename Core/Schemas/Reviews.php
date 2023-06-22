<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Reviews
 *
 * @property int $ReviewID
 * @property \DateTime $LastModified
 * @property string $ProductCode
 * @property string $ReviewTitle
 * @property int $Rate
 * @property int $CustomerID
 * @property int $YesHelpful
 * @property int $NotHelpful
 * @property string $Name
 * @property string $Location
 * @property string $Active
 * @property int $LastModBy
 * @property mixed $ReviewDescription
 
 */
class Reviews extends Model{

    protected $table = "Reviews";
    protected $primaryKey = "ReviewID";

    // Your relationships...

}
