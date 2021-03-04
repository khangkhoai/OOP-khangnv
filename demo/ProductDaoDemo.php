<?php

include '../demo/ProductDemo.php';
include '../dao/CategoryDao.php';
include '../dao/ProductDao.php';
class ProductDaoDemo extends ProductDao
{
	public function insertTest($row)
	{
		$this->insert($row);
	}

	public function updateTest($row)
	{
		$this->update($row);
	}

	public function deleteTest($row)
	{
		$this->delete($row);
	}

	public function findAllTest()
	{
		$this->findAll();
	}

	public function findByIdProductTest($id)
	{
		$this->findByIdProduct($id);
	}

	public function searchTest($name){
        $this->search($name);
    } 
}
$db = new Database();
$productDaoDemo = new ProductDaoDemo($db);
$product = new Product(1,'aa');
$productDaoDemo->insertTest($product);
// $categoryDaoDemo->updateTest($catagory);
// $categoryDaoDemo->findAllTest();
// $productDaoDemo->findByIdProductTest(1);
$productDaoDemo->searchTest('a');
echo '<pre>';
print_r($productDaoDemo);
echo '<pre>';
