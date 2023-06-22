<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\Newsletters
 *
 * @property int $News_ID
 * @property string $News_Name
 * @property string $News_SendTo
 * @property string $News_SendTestTo
 * @property string $News_SendTo_Unsubscribers
 * @property string $News_Template
 * @property string $News_Subject
 * @property \DateTime $News_SendDate
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $news1
 * @property string $news2
 * @property string $news3
 * @property string $news4
 * @property string $news5
 * @property string $news6
 * @property string $news7
 * @property string $news8
 * @property string $news9
 * @property string $news10
 * @property string $news11
 * @property string $news12
 * @property string $news13
 * @property string $news14
 * @property string $news15
 * @property string $news16
 * @property string $news17
 * @property string $news18
 * @property string $news19
 * @property string $news20
 * @property mixed $News_HTML_Body
 * @property mixed $News_TextOnly_Body
 
 */
class Newsletters extends Model{

    protected $table = "Newsletters";
    protected $primaryKey = "News_ID";

    // Your relationships...

}
