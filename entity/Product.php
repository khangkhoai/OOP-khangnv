<?php
require_once '../entity/BaseRow.php';
class Product extends BaseRow
{
    protected $categoryId;
    public function __construct($id, $name, $categoryId){
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }
    public function getCategoryId ()
    {
        return $this->categoryId;
    }
    
    public function setCategoryId ($categoryId)
    {
        $this->categoryId = $categoryId;
    }
}
?>