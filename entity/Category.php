<?php
class Category
{   
	public categoryId;
    public categoryName;
    
    public function categoryId ()
    {
        return $this->categoryId;
    }

    public function setId ($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getcategoryName ()
    {
        return $this->name;
    }

    public function setcategoryName ($categoryName)
    {
        $this->categoryName = $categoryName;
    }
}
?>