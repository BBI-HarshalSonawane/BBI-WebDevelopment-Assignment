<?php
header('Content-Type: text/plain');

class BankApp {
    public string $AccNo;
    public string $Name;
    public float $Balance;

    public function __construct(string $AccNo, string $Name, float $Balance) {
        $this->AccNo = $AccNo;
        $this->Name = $Name;
        $this->Balance = $Balance;
    }

    public function printAmount() {
        echo "AC {$this->AccNo}, Name: {$this->Name}, Amount: " . number_format($this->Balance, 2) . "\n";
    }

    public function transfer(BankApp $toWho, float $amount = 0): bool {
        if ($this->Balance >= $amount) {
            $this->Balance -= $amount;
            $toWho->Balance += $amount;
            return true;
        } else {
            return false;
        }
    }
}

// Create accounts
$myAccount1 = new BankApp("21234", "Jay", 892.2);
$myAccount2 = new BankApp("2456", "Naresh", 43.2);

// Print initial amounts
$myAccount1->printAmount();
$myAccount2->printAmount();

// Perform transfer
if ($myAccount1->transfer($myAccount2, 92.2)) {
    echo "Transfer successful.\n";
} else {
    echo "Transfer failed: Insufficient balance.\n";
}

// Print final amounts
$myAccount1->printAmount();
$myAccount2->printAmount();

?>
