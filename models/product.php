<?php
require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/description.php';
class product{
    public $name;
    public $description;
    public $price;
    public $categories;
    public $poster;
    
    function __construct($_name,description $_description,$_price, category $_categories,$_poster)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->categories = $_categories;
        $this->poster = $_poster;
    }
}

