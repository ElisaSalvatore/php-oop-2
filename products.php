<?php
require_once "./classes/toy.php";
require_once "./classes/food.php";

/* E-SHOP
 L’e-commerce vende prodotti per gli animali.
 I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
 L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
 Il pagamento avviene con la carta di credito, che non deve essere scaduta.
*/

class Product {
    public string $brand;
    public $name;
    public int $price;
    public $description;

    // GET AND SET THE VALUE
    //BRAND VALUE
    public function getBrand() {
        return $this->brand;
    }
    public function setBrand($brand) {
        $this->brand = $brand;
    
        return $this;
    }

    //NAME VALUE
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    
        return $this;
    }

    //PRICE VALUE
    public function getPrice() {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
    
        return $this;
    }

    //DESCRIPTION VALUE
    public function getDescription() {
        return $this->description;
    }
    public function setDescription($description) {
        $this->description = $description;
    
        return $this;
    }
    
}

$product = new Product();
var_dump($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP E-SHOP</title>
</head>
<body>
    <h1>E-COMMERCE</h1>
</body>
</html>
