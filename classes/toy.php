<?php
require_once './products.php';
class Toy extends Product {
    public $material;

    public function __construct ($_brand, $_name, $_price, $_description, $_material) {
    
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;

        $this->setMaterial($_material);
    }
   
    // GET AND SET THE VALUE
    //MATERIAL VALUE
    public function getMaterial() {
        return $this->material;
    }
    public function setMaterial($material) {
        $this->material = $material;
    
        return $this;
    }
};

?>