<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\Articles
 *
 * @property int $ID
 * @property string $PageName
 * @property string $SpotKey
 * @property int $CategoryID
 * @property string $ArticleTitle
 * @property string $ArticleCaption
 * @property \DateTime $LastModified
 * @property string $METATAG_Title
 * @property string $METATAG_Description
 * @property int $LastModBy
 * @property mixed $ArticleBody
 * @property mixed $METATAG_Keywords
 * @property mixed $CUSTOM_METATAGS_OVERRIDE
 * @property string $ExcludeFrom_Sitemap
 
 */
class Articles extends Model{

    protected $table = "Articles";
    protected $primaryKey = "ID";

    // Your relationships...

}
