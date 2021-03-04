<?php
require_once '../entity/Product.php';
require_once '../entity/Category.php';
// require_once'../demo/ProductDemo.php';
require_once '../dao/Database.php';
require_once '../dao/CategoryDAO.php';
class CategoryDaoDemo extends CategoryDao
{
	public function insertTest($row)
	{
		return $this->insert($row);
	}

	public function updateTest($row)
	{
		return $this->update($row);
	}

	public function deleteTest($row)
	{
		$this->delete($row);
	}

	public function findAllTest()
	{
		$this->findAll();
	}

	public function findByIdCatagoryTest($id)
	{
		$this->findByIdCatagory($id);
	}

	public function findByNameTest($name)
	{
		$this->findByName($name);
	}

	public function searchTest($name)
	{
		$this->selectTable($name);
	}
}
$db = new Database();
$categoryDaoDemo = new CategoryDaoDemo($db);
$categoryDaoDemo1 = new CategoryDaoDemo($db);
$catagory = new Category(1, 'ba');
$catagory1 = new Category(2, 'bb');
$categoryDaoDemo->insertTest($catagory);
$categoryDaoDemo->insertTest($catagory1);
$categoryDaoDemo->updateTest($catagory);
// $categoryDaoDemo->findAllTest();
// $categoryDaoDemo1->findByIdCatagoryTest(3);
// $categoryDaoDemo1->findByNameTest("bb");
echo '<pre>';
print_r($categoryDaoDemo1);
echo '<pre>';
