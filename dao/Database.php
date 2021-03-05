<?php
require_once '../entity/BaseRow.php';
class Database
{
	private static $database;
	protected $productTable;
	protected $categoryTable;
	protected $accessoryTable;

	public function __construct(){}

    public static function createDatabase(): Database
    {
        if(self::$database !== null){
            return self::$database;
        }
        self::$database = new self();
        return self::$database;
    }

	public function getProductTable()
	{
		return $this->productTable;
	}

	public function getCategoryTable()
	{
		return $this->categoryTable;
	}

	public function getAccessoryTable()
	{
		return $this->accessoryTable;
	}

	public function insertTable($table, BaseRow $row)
	{
		return $this->$table[] = $row;
	}

	public function selectTable($tableName, $name)
	{
		$table = array();
		foreach ($this->$tableName as $item) {
			if ($item->getName() == $name) {
				$table[] = $item;
			}
		}
		return $table;
	}

	public function updateTable($tableName,BaseRow $row )
	{
		$id = $row->getId();
		foreach ($this->$tableName as $key => $value) {
			if ($value->getId() == $id) {
				return $this->$tableName[$key] = $row;
			}
		}
	}

	public function updateTableById($table,BaseRow $row, $id)
	{

		foreach ($this->$table as $key => $value) {
			if ($value->getId() == $id) {
				return $this->$table[$key] = $row;
			}
		}
	}

	public function deleteTable($name,$id)
	{
		
		foreach ($this->$name as $key => $item) {
			if ($item->getId() == $id) {
				unset($this->$name[$key]);
				return true;
			}
		}
	}

	public function getTable($tableName)
	{
		switch ($tableName) {
			case 'productTable':
				return $this->getProductTable();
				break;
			case 'categoryTable':
				return $this->getCategoryTable();
				break;
			case 'accessoryTable':
				return $this->getAccessoryTable();
				break;
		}
		return false;
	}

	public function findById($name, $id)
	{
		foreach ($this->$name as $key => $item) {
			if ($item->getId() != $id) {
				unset($this->$name[$key]);		 
			}
		}
	}

	public function findByName($tableName, $name)
	{
		foreach ($this->$name as $key => $item) {
			if ($item->getName() != $name) {
				unset($this->$name[$key]);		 
			}
		}
	}

	public function getAllProduct($table)
	{
		$product = array();
		foreach ($this->$table as $value) {
			$product[] = $value;
		}
		return $product;
	}
}
