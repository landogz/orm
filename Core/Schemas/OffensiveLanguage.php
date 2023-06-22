<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\OffensiveLanguage
 *
 * @property int $ID
 * @property string $word
 * @property \DateTime $LastModified
 * @property int $LastModBy
 
 */
class OffensiveLanguage extends Model{

    protected $table = "OffensiveLanguage";
    protected $primaryKey = "ID";

    // Your relationships...

}
