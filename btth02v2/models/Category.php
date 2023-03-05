<?php

class Category {
    private $id;
    private $name;
    private $quantity;

    public function __construct($id, $name, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}