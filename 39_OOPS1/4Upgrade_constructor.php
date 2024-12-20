<?php

//  here is pass by reference we achieve via (&) 🔃 symbol.
// header('Content-Type : text/plain');
// declare(strict_types= 1);

class MyBank{

    // here we don't declared the variable as declared earlier ✅ check earlier files
    // now we don't ❌ need to do so 👇 we have solution as below in contractor we directly use it.👇👇

    // public float $amount;   // allow ✅

    function __construct(public string $accNo, public string $name, public float $amount){ // earlier we pass the argument in simple way. 👉 string $accNo, string $name like this 

        // $this->amount = $amount;     // then we need to tell it here we resolve that variable ✅\
    }

    function printBalance(){
        echo "Ur name {$this->name} account no {$this->accNo} amount {$this->amount}";
    }
}

    $myBank = new myBank("21234","Jay",89297878238.2);
    $myBank->printBalance();




?>