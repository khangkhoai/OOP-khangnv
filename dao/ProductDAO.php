<?php
require_once '../dao/BaseDAO.php';
class ProductDAO extends BaseDAO
{
    public function __construct(Database &$database)
    {
        parent::__construct($database);
        $this->tableName = 'productTable';
    }
}
