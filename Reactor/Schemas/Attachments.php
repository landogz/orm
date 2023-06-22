<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Attachments
 *
 * @property int $ID
 * @property string $Table_Name
 * @property int $Table_ID
 * @property string $FileName
 * @property string $FileExt
 * @property string $FileKey
 * @property int $FileSizeinKB
 * @property mixed $LastModified
 * @property int $LastModBy
 * @property int $AttachmentKey
 
 */
class Attachments extends Model{

    protected $table = "Attachments";
    protected $primaryKey = "ID";

    // Your relationships...

}
