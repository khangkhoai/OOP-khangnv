<?php
require_once '../entity/Category.php';
require_once '../dao/Database.php';
require_once '../dao/CategoryDAO.php';
require_once '../demo/BaseDemo.php';
class CategoryDaoDemo extends BaseDemo
{
	public function __construct(CategoryDAO $propertyDao)
    {
        parent::__construct($propertyDao);
    }
}
$db = Database::createDatabase();
$categoryDaoDemo = new CategoryDaoDemo(new CategoryDAO($db));
$categoryDaoDemo->insertTest(new Category(1, 'test'));
// $categoryDaoDemo->findAllTest();
// $categoryDaoDemo->findByIdTest(3);
// $categoryDaoDemo1->findByNameTest("bb");
echo '<pre>';
print_r($categoryDaoDemo);
echo '<pre>';
