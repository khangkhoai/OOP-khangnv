<?php
require '../entity/Product.php';
require '../entity/Category.php';
require '../entity/Accessory.php';
include '../demo/ProductDemo.php';
include '../dao/Database.php';

class DatabaseDemo extends Database
{
	public function insertTableTest($name, $row)
	{
		$this->insertTable($name, $row);
	}

	public function selectTableTest($name, $row)
	{
		$this->selectTable($name, $row);
	}

	public function updateTableTest($name, $row)
	{
		$this->updateTable($name, $row);
	}

	public function deleteTableTest($name, $row)
	{
		$this->deleteTable($name, $row);
	}

	public function updateTableByIdTest($name, $row, $id)
	{
		$this->updateTableById($name, $row, $id);
	}

	public function initDatabase()
	{
		$amountRecord = 10;
		for ($i = 1; $i <= $amountRecord; $i++) {
			$this->insertTableTest('productTable', new Product($i, 'product test ' . $i, $i * 10));
			$this->insertTableTest('categoryTable', new Category($i, 'category test' . $i));
			$this->insertTableTest('accessoryTable', new Accessory($i, 'accessory test' . $i));
		}
	}
	// public function truncateTableTest($db)
	// {
	// 	$this->truncateTable($db);
	// }

}
$id = 1;
$demo = new ProductDemo();
$demo1 = new ProductDemo();
$demo->createProductTest($id, 'may anh', 2);
$demo1->createProductTest($id, 'm anh', 2);
$db = new DatabaseDemo();
$table = $db->insertTable('categoryTable', $demo);
// $table = $db->updateTableTest('categoryTable',$demo1);
$table = $db->updateTableById('categoryTable', $demo1, 1);
// var_dump($db->selectTable('categoryTable','may '));
// var_dump($db->updateTable('categoryTable',$demo));
// echo $db->deleteTable('categoryTable',$demo);
// echo $db->truncateTableTest($db);
// $db->initDatabase();
echo '<pre>';
print_r($db);
echo '<pre>';
