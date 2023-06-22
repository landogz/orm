<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\GCR_Language
 *
 * @property int $GCR_LanguageID
 * @property string $GCR_Language_DisplayName
 * @property string $GCR_Language_Code
 
 */
class GCR_Language extends Model{

    protected $table = "GCR_Language";
    protected $primaryKey = "GCR_LanguageID";

    // Your relationships...

}
