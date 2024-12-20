<?php
    class BankAccount1 {
        public int $AcNo;
        public string $Name;
        public float $Balance;

        function __construct(int $AcNo, string $Name, float $Balance){
            $this->AcNo = $AcNo;
            $this->Name = $Name;
            $this->Balance = $Balance;
        }

        function printBalance(){ // ✅ output always need in "double quotes" 😁
            echo "your account No is {$this->AcNo} Name = {$this->Name}, Balance = {$this->Balance} \n";
        }
    }

    $bankAccount1 = new BankAccount1('123456', 'Jay Shankar', 678199);

    $bankAccount1->printBalance();
    
    // $bankAccount2 = new BankAccount();
    // $bankAccount2->AcNo = '78567890';
    // $bankAccount2->Name = 'Ravi Kishan';
    // $bankAccount2->Balance = 827719;
    
    // $bankAccount2->printBalance();

?>