<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\StyleEditor
 *
 * @property int $VersionNum
 * @property string $VersionStamp
 * @property int $VersionId
 * @property string $TemplateId
 * @property mixed $LastModified
 
 */
class StyleEditor extends Model{

    protected $table = "StyleEditor";
    protected $primaryKey = "VersionNum";

    // Your relationships...

}
