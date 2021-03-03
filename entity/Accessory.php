<?php
class Accessory
{   
	public accessoryId;
    public accessoryName;

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