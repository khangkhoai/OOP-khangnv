<?php
require_once '../entity/InterfaceEntity.php';
abstract class BaseRow implements InterfaceEntity
{
    public $id;
    public $name;

    function getId()
    {
        return $this->id;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }

    public function getName ()
    {
        return $this->name;
    }
    
    public function setName ($name)
    {
        $this->name = $name;
    }
}
?>