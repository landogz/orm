<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\StyleEditor
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
