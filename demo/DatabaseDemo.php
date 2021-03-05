<?php
require_once '../entity/Product.php';
require_once '../entity/Category.php';
require_once '../entity/Accessory.php';
require_once '../demo/ProductDemo.php';
require_once '../dao/Database.php';
require_once '../entity/BaseRow.php';

class DatabaseDemo 
{
	protected $databaseTest;
	public function __construct(Database $database)
    {
        $this->databaseTest = $database;
    }

    public function getDatabase(): Database
    {
        return $this->databaseTest;
    }

	public function insertTableTest($name,$row)
	{
		$this->databaseTest->insertTable($name, $row);
	}

	public function selectTableTest($name,$row)
	{
		$this->databaseTest->selectTable($name, $row);
	}

	public function updateTableTest($name,$row)
	{
		$this->databaseTest->updateTable($name, $row);
	}

	public function deleteTableTest($name,$row)
	{
		$this->databaseTest->deleteTable($name, $row);
	}

	public function updateTableByIdTest($name,$row, $id)
	{
		$this->databaseTest->updateTableById($name, $row, $id);
	}

	public function findByNameTest($tableName,$name)
	{
		$this->databaseTest->findByName($tableName,$name);
	}
	public function findByIdTest($tableName,$id)
	{
		$this->databaseTest->findById($tableName,$id);
	}
	public function initDatabase()
	{
		$amountRecord = 10;
		for ($i = 1; $i <= $amountRecord; $i++) {
			DatabaseDemo::insertTableTest('productTable', new Product($i, 'product test ' . $i, $i * 10));
			DatabaseDemo::insertTableTest('categoryTable', new Category($i, 'category test' . $i));
			DatabaseDemo::insertTableTest('accessoryTable', new Accessory($i, 'accessory test' . $i));
		}
	}
	// public function truncateTableTest($db)
	// {
	// 	$this->truncateTable($db);
	// }

}
$databaseDemo = new DatabaseDemo(Database::createDatabase());
//$databaseDemo->insertTableTest();
$databaseDemo->insertTableTest('categoryTable', new Category(1, 'category update'));
$databaseDemo->insertTableTest('productTable', new Product(1, 'update',3));
$databaseDemo->updateTableByIdTest('productTable', new Product(2, 'product',2), 1);
// $databaseDemo->deleteTableTest('productTable', new Product(2, 'update',3));
// $databaseDemo->initDatabase();
// $databaseDemo->findByNameTest('productTable','update');
$databaseDemo->selectTableTest('productTable',"pr");
echo '<pre>';
print_r($databaseDemo);
echo '<pre>';
