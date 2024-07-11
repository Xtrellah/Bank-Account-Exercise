<?php

declare(strict_types=1);

class BankAccount {
    protected float $balance;

    public function __construct(float $balance) {
        $this->balance = $balance;

        if ($this->balance <= 0)
        {
            throw new Exception('You cannot open an account with no balance');
        }
    }

    public function deposit(float $deposit): float {
        if ($deposit > 0)
        {
            return $this->balance + $deposit;
        }
        return $this->balance + $deposit;
    }

    public function getBalance() {
        return "Your balance is $this->balance";
    }

    protected function calculateInterest(): float {
        return $this->balance * 0.05;
    }

    public function applyInterest(): float {
        return $this->balance + $this->calculateInterest();
    }
}


$BankAccount = new BankAccount(100);
$BankAccount->deposit(10.50);
//$BankAccount->getBalance();
//$BankAccount->calculateInterest();
//$BankAccount->applyInterest();

echo $BankAccount->getBalance();
echo "<br>";

var_dump($BankAccount);