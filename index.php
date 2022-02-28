<?php
require_once "./products.php";
require_once "./users.php";

// var_dump(new Product());
// var_dump(new User());

$ball = new Toy("DOGame", "Pet Ball", "5.50", "Un giocattolo che farà impazzire il tuo amico a quattro zampe!", "Plastic");

$cannedMeat = new Food("Almo Nature", "Canned Food", "2.99", "Bocconcini di pollo in scatola.", "2025-01-01", "Morsels", "400gr");

$firstUser = new User("Mario", "Rossi", "mariorossi@gmail.com", "true", "20");

var_dump($ball, $cannedMeat, $firstUser)

?>

