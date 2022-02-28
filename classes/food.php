<?php

class Food {
    public $expirationDate;
    public bool $dryFood;

    // GET AND SET THE VALUE
    //EXPIRATION DATE VALUE
    public function getExpirationDate() {
        return $this->expirationDate;
    }
    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;
    
        return $this;
    }
    
};

?>