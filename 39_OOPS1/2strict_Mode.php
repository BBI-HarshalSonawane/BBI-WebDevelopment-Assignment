<?php
   
    declare(strict_types= 1);   // ✅ IMP to prevent variable from directly assigned 👉 "any data type" variable 👇👇 See below 👉 $bankAccount1->AcNo = "23456";

    class BankAccount {
        public int $AcNo;
        public $withoutReturnTypeVariable;  // ✅ IMP

        public $mydefaultvalueVariable = 287838; // ✅ default value also allow, still we have ❌ "not" mentioned any return type.
    }

    $bankAccount1 = new BankAccount();

    $bankAccount1->$withoutReturnTypeVariable = [];     // ✅  Here we assigned "array" 👈 as an data type to our 👉 "variable" declared in class ✅ it will allow in PHP

    // $bankAccount1->AcNo = "23456";  // ❌ here we assigned an "String" 👈 variable to "int" 👈 variable show error on webPage, Page not found ERROR.

    // $bankAccount1->AcNo = (int) "23456";   // ✅ solution1  "Type Casting"

    // $bankAccount1->AcNo = 23456;  // ✅ solution2 allow
    

    function printBalance(BankAccount $account) { // ✅ output always need in double quotes
       echo "your account No is {$account->AcNo} ";
    }

    printBalance($bankAccount1);

?>