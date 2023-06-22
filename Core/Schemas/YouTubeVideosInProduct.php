<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\YouTubeVideosInProduct
 *
 * @property int $Id
 * @property int $ProductId
 * @property string $YouTubeId
 * @property string $Description
 * @property int $Sort
 * @property mixed $CreatedDate
 * @property mixed $UpdatedDate
 * @property int $UpdatedByCustomerId
 
 */
class YouTubeVideosInProduct extends Model{

    protected $table = "YouTubeVideosInProduct";
    protected $primaryKey = "Id";

    // Your relationships...

}
