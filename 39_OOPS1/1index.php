<?php
   
    // header('Content-Type : text/plain');  // if we enable it, it will show us an 500 internal server error.

    class BankAccount {
        public int $AcNo;
        public string $Name;
        public float $Balance;
        public $withoutReturnTypeVariable;  // ✅ IMP here without return type (int, float, double) we create variable 
    }

    $bankAccount1 = new BankAccount();

    $bankAccount1->$withoutReturnTypeVariable = [];     // ✅  Here we assigned "array" 👈 as an data type to our 👉 "variable" declared in class ✅ it will allow in PHP

    $bankAccount1->AcNo = 123456;
    $bankAccount1->Name = 'Jay Shankar';
    $bankAccount1->Balance = 678199;


    $bankAccount2 = new BankAccount();
    $bankAccount2->AcNo = 856789;
    $bankAccount2->Name = 'Ravi Kishan';
    $bankAccount2->Balance = 827719;


    function printBalance(BankAccount $account) { // ✅ output always need in double quotes
       echo "your account No is {$account->AcNo} Name = {$account->Name}, Balance = {$account->Balance} \n";
    }

    printBalance($bankAccount1);

?>




