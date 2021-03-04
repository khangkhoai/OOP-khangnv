<?php
require_once '../dao/Database.php';
class ProductDAO extends Database
{
	protected $database;
	public $tableName='productTable';

	public function __construct($database)
    {
        $this->database = $database;
    }

    public function getDatabase():Database{
        return $this->database;
    }

    public function setDatabase($database){
        $this->database = $database;
    }

	public function insert($row)
	{
		return $this->database->insertTable($this->tableName, $row);
	}

	public function update($row)
	{
		return $this->database->updateTable($this->tableName, $row);
	}

    public function delete($row)
    {
    	return $this->database->deleteTable($this->tableName, $row);
    }

    public function findAll()
    {
		$tableName = $this->tableName;

        if($this->database->getTable($tableName)){
            return $this->database->getTable($tableName);
        }
            return false;
    }

    public function findByIdProduct($id)
    {
    	return $this->database->findById($this->tableName, $id);
    }

    public function search($name){
        return $this->database->selectTable($this->tableName, $name);
    } 
}
?>