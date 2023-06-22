<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\AdminPrefs_Dashboard
 *
 * @property int $ID
 * @property int $CustomerID
 * @property int $spAspID
 * @property string $spName
 * @property int $TopRowcount
 * @property string $BegDatepart
 * @property int $BegNumber
 * @property string $EndDatepart
 * @property int $EndNumber
 * @property string $ChartType
 * @property string $ChartSize
 * @property int $Position_OrderBy
 * @property int $Position_Column
 * @property string $Comparison_Overlay
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $RSS_Template
 * @property string $RSS_URL
 * @property string $Truncate_Labels
 
 */
class AdminPrefs_Dashboard extends Model{

    protected $table = "AdminPrefs_Dashboard";
    protected $primaryKey = "ID";

    // Your relationships...

}
