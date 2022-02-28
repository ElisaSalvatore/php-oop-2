<?php
require_once "./classes/registeredUser.php";

/* E-SHOP
 L’e-commerce vende prodotti per gli animali.
 I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
 L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
 Il pagamento avviene con la carta di credito, che non deve essere scaduta.
*/

class User {
    public $name;
    public $surname;
    public $email;

    // GET AND SET THE VALUE
    //NAME VALUE
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    
        return $this;
    }

    //SURNAME VALUE
    public function getSurname() {
        return $this->surname;
    }
    public function setSurname($surname) {
        $this->surname = $surname;
    
        return $this;
    }

     //EMAIL VALUE
     public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    
        return $this;
    }

}

// $user = new User();
// var_dump($user)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS E-SHOP</title>
</head>
<body>
 
</body>
</html>