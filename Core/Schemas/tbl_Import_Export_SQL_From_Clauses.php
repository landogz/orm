<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\tbl_Import_Export_SQL_From_Clauses
 *
 * @property int $ID_tbl_Import_Export_SQL_From_Clauses
 * @property string $Table1Name
 * @property string $Table2Name
 * @property string $SQL_JOIN
 * @property int $SortOrder
 
 */
class tbl_Import_Export_SQL_From_Clauses extends Model{

    protected $table = "tbl_Import_Export_SQL_From_Clauses";
    protected $primaryKey = "ID_tbl_Import_Export_SQL_From_Clauses";

    // Your relationships...

}
