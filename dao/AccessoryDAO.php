<?php
require_once '../dao/Database.php';
class AccessoryDAO extends BaseDAO
{
    public function __construct(Database &$database)
    {
        parent::__construct($database);
        $this->tableName = 'accessoryTable';
    }
}
?>