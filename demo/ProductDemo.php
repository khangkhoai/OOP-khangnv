<?php
require_once '../entity/Product.php';

class ProductDemo extends Product
{
   public $obj;

   public function createProductTest($id,$name,$catagoryId)
   {
      $this->setId($id++);
      $this->setName($name);
      $this->setCategoryId($catagoryId);
   }

   public function printProduct()
   {
      echo "ID: ".$this->getId()."\nPRODUCT NAME: ".$this->getName()."\nCATEGORY ID: ".$this->getCategoryId()."\n";
   }
}
$id=1;
$demo = new Product();
$demo = new ProductDemo();
$demo->createProductTest($id,"may anh",2);
$demo->printProduct($demo);
?>