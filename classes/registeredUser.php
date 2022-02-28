<?php
//L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi 
// e ricevere il 20% di sconto su tutti i prodotti.

class Registered extends User {
    public bool $discount;
    public $percentDiscount;

    public function setDiscount() {
        if($discount = true) {
            $this->percentDiscount = 20;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }
}
?>