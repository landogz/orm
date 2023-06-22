<?php namespace Reactor\Schemas;

use Reactor\Database\Eloquent\Model;

/**
 *\Reactor\Schemas\tbl_Import_Export_Fields
 *
 * @property int $ID_tbl_Import_Export_Fields
 * @property int $ID_tbl_Import_Export_Steps
 * @property string $Volusion_Field
 * @property string $Third_Party_Field
 * @property int $IncludeInExport
 * @property int $IsChildOf
 * @property int $ColumnOrder
 * @property int $SQLOrderBy
 * @property string $Format
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $TableName
 * @property string $Alias
 * @property string $FieldName
 * @property int $SortOrder
 * @property string $WhereOperator
 * @property string $WhereValue
 * @property string $HavingOperator
 * @property string $HavingValue
 * @property string $XMLFieldType
 * @property int $Include_XML_Tags
 * @property int $Place_Data_in_Quotes
 * @property int $ID_tbl_Import_Export_Steps_onchange_Write_End_Tag
 * @property string $DataType
 
 */
class tbl_Import_Export_Fields extends Model{

    protected $table = "tbl_Import_Export_Fields";
    protected $primaryKey = "ID_tbl_Import_Export_Fields";

    // Your relationships...

}
