<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\SEO_CustomMetaPages
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
