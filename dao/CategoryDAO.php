<?php
require_once '../dao/BaseDAO.php';
class CategoryDAO extends BaseDAO
{
    public function __construct(Database &$database)
    {
        parent::__construct($database);
        $this->tableName = 'categoryTable';
    }
}
?>