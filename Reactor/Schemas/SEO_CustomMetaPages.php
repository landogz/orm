<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\SEO_CustomMetaPages
 *
 * @property int $Id
 * @property string $PageUrl
 * @property string $PageName
 
 */
class SEO_CustomMetaPages extends Model{

    protected $table = "SEO_CustomMetaPages";
    protected $primaryKey = "Id";

    // Your relationships...

}
