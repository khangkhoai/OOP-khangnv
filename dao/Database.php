<?php
class Database
{
	private $productTable;
	private $categoryTable;
	private $accessoryTable;
	public function insertTable($table, $row)
	{
		return $this->$table[] = $row;
	}

	public function selectTable($table, $name)
	{
		$product = array();
		foreach ($this->$table as $value) 
		{
			if ($value->getName() == $name) 
			{
				$product[] = $value;
			}
		}
		return $product;
	}

	public function updateTable($name,$row)
	{
		$id = $row->getID();
		foreach($this->$name as $key => $value)
		{
			if($value->getID() == $id){
				return $this->$name[$key] = $row;
			}
		}
	}

	public function deleteTable($name,$row)
	{
		$id = $row->getID();
		foreach ($this->$name as $key => $item)
		{
			if($item->getId() == $id){
				unset($this->$name[$key]);
				return true;
			}
		}
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

?>