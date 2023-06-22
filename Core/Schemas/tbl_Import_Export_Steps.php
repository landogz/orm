<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Import_Export_Steps
 *
 * @property int $ID_tbl_Import_Export_Steps
 * @property string $Description
 * @property string $Custom
 * @property string $FileType
 * @property string $HeaderBegin
 * @property string $HeaderEnd
 * @property string $Delimiter
 * @property string $SQLSelect
 * @property string $SQLFrom
 * @property string $SQLWhereFixed
 * @property string $SQLWhereDynamic
 * @property string $SQLWhereDateRange
 * @property \DateTime $SQLBeginDateRange
 * @property \DateTime $SQLEndDateRange
 * @property string $SQLOrderBy_Old
 * @property string $ExportFileName
 * @property int $AddTimeStampToFileName
 * @property string $FieldToLog
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property int $ID_tbl_Import_Exports
 * @property string $SQLWhere
 * @property string $SQLGroupBy
 * @property string $SQLHaving
 * @property string $Name
 * @property int $SortOrder
 * @property int $UseAdditionalFromClause
 * @property string $FTPLogin
 * @property string $FTPPassword
 * @property string $FTPUrl
 * @property string $SchemaFile
 * @property string $FileTargetLocation
 * @property string $XML_Header
 * @property string $Top_Level_Element
 * @property int $ID_tbl_Import_Export_Results
 
 */
class tbl_Import_Export_Steps extends Model{

    protected $table = "tbl_Import_Export_Steps";
    protected $primaryKey = "ID_tbl_Import_Export_Steps";

    // Your relationships...

}
