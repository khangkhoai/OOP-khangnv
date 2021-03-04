<?php
class Database
{
	private $productTable;
	private $categoryTable;
	private $accessoryTable;
	
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

	public function insertTable($table, $row)
	{
		return $this->$table[] = $row;
	}

	public function selectTable($tableName, $name)
	{
		$table = array();
		foreach ($this->$tableName as $item){
			if($item->getName() == $name){
				$table[] = $item;
			}
		}
		return $table;
	}

	public function updateTable($tableName,$row)
	{
		$id = $row->getId();
		foreach($this->$tableName as $key => $value)
		{
			if($value->getId() == $id){
				return $this->$tableName[$key] = $row;
			}
		}
	}

	public function updateTableById($table,$row,$id)
	{
		
		foreach($this->$table as $key => $value)
		{
			if($value->getId() == $id){
				return $this->$table[$key] = $row;
			}
		}
	}

	public function deleteTable($name,$row)
	{
		$id = $row->getId();
		foreach ($this->$name as $key => $item)
		{
			if($item->getId() == $id){
				unset($this->$name[$key]);
				return true;
			}
		}
	}

	public function getTable($tableName){
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

	public function findById($tableName, $id){        
		foreach ($this->$tableName as $item){
			if($item->getId() == $id){
				return $item;
			}
		}  
	}

	public function findByName($tableName, $name){    
		foreach ($this->$tableName as $value) 
		{
			if ($value->getName() == $name) 
			{
				$product[] = $value;
			}
		}
		return $product;
	}

	public function getAllProduct($table)
	{
		$product = array();
		foreach($this->$table as $value)
		{
			$product[] = $value;
		}
		return $product;
	}
}
