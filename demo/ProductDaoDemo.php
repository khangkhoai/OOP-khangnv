<?php
require_once '../entity/Product.php';
require_once '../dao/Database.php';
require_once '../dao/ProductDAO.php';
require_once '../demo/BaseDemo.php';
class ProductDaoDemo extends BaseDemo
{
	public function __construct(ProductDAO $propertyDao)
    {
        parent::__construct($propertyDao);
    }
}
$db = Database::createDatabase();
$categoryDaoDemo = new ProductDaoDemo(new ProductDAO($db));
$categoryDaoDemo->insertTest(new Product(2,'test',2));
$categoryDaoDemo->insertTest(new Product(3,'demo',2));
// $categoryDaoDemo->findAllTest();
// $categoryDaoDemo->findByIdTest(2);
// $categoryDaoDemo->deleteTest(3);
// $categoryDaoDemo->findByNameTest("test");
echo '<pre>';
print_r($categoryDaoDemo);
echo '<pre>';
