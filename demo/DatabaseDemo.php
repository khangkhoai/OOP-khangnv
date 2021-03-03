<?php
require_once '../entity/Product.php';
include '../demo/ProductDemo.php';
include '../dao/Database.php';

class DatabaseDemo extends Database
{
	protected $databaseTest;

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

	// public function truncateTableTest($db)
	// {
	// 	$this->truncateTable($db);
	// }

}
$id=1;
$demo = new ProductDemo();
$demo->createProductTest($id,'may anh',2);
$db = new DatabaseDemo();
$table = $db->insertTable('categoryTable',$demo);
var_dump($db->selectTable('categoryTable','may anh'));
var_dump($db->updateTable('categoryTable',$demo));
echo $db->deleteTable('categoryTable',$demo);
// echo $db->truncateTableTest($db);
echo '<pre>';
print_r($db);
echo '<pre>';
?>