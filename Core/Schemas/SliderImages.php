<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\SliderImages
 *
 * @property int $SliderImageId
 * @property string $ImageFileName
 * @property string $AltText
 * @property string $PageLinkUri
 * @property int $SortOrder
 * @property mixed $LastModifiedUTC
 * @property int $LastModBy
 * @property string $BannerText
 * @property string $BannerSubText
 * @property string $BannerButtonText
 
 */
class SliderImages extends Model{

    protected $table = "SliderImages";
    protected $primaryKey = "SliderImageId";

    // Your relationships...

}
