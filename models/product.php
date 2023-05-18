<?php
require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/description.php';
class product{
    public $name;
    public $description;
    private $price;
    public $categories;
    public $poster;
    
    function __construct($_name,description $_description, category $_categories,$_poster)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->categories = $_categories;                   
        $this->poster = $_poster;
    }
    public function setPrice($_price){
        if (!is_int($_price)) {
            throw new Exception('inserire un numero');
        }elseif ($_price <= 0) {
            throw new Exception('non regaliamo i prodotti');
        }else{
            $this->price = $_price;
        }
    }

    public function getPrice(){
        return $this->price;
    }
}

