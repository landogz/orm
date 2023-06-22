<?php namespace Core\Schemas;

use Core\Database\Eloquent\Model;

/**
 *\Core\Schemas\QueryBank
 *
 * @property int $QB_ID
 * @property string $QB_Table
 * @property string $QB_Title
 * @property string $QB_QueryType
 * @property int $QB_CustomerID
 * @property \DateTime $LastModified
 * @property int $LastModBy
 * @property string $QB_Export_FileType
 * @property mixed $QB_Query
 * @property string $QB_Misc
 * @property string $QB_AccessList
 * @property string $QB_Description
 * @property string $QB_Hide
 
 */
class QueryBank extends Model{

    protected $table = "QueryBank";
    protected $primaryKey = "QB_ID";

    // Your relationships...

}
