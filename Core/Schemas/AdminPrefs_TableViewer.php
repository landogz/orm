<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\AdminPrefs_TableViewer
 *
 * @property int $APTV_ID
 * @property int $APTV_CustomerID
 * @property string $APTV_Table
 * @property string $APTV_ScreenSize
 * @property string $APTV_RowsPerPage
 * @property string $APTV_BUpdates_Hide
 * @property string $APTV_VPreferences_Hide
 * @property string $APTV_SearchBox_Hide
 * @property string $APTV_OtherBox1_Hide
 * @property string $APTV_OtherBox2_Hide
 * @property string $APTV_QuickStats_Hide
 * @property string $APTV_Add_PlusViewList
 * @property string $APTV_Save_PlusViewList
 * @property int $APTV_QB_ID
 * @property mixed $APTV_ViewableColumns
 * @property mixed $APTV_HiddenColumns
 * @property mixed $APTV_EditableColumns
 
 */
class AdminPrefs_TableViewer extends Model{

    protected $table = "AdminPrefs_TableViewer";
    protected $primaryKey = "APTV_ID";

    // Your relationships...

}
