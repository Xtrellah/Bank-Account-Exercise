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

    public function deposit($deposit) {
        if ($deposit > 0)
        {
            return $this->balance + $deposit;
        }
        return $this->balance + $deposit;
    }

    public function getBalance() {
        return "Your balance is $this->balance";
    }

    protected function calculateInterest() {
        return $this->balance * 0.05;
    }

    public function applyInterest() {
        return $this->balance + $this->calculateInterest();
    }
}

$BankAccount = new BankAccount(100);
$BankAccount->deposit(10.5);
$BankAccount->getBalance();
$BankAccount->calculateInterest();
$BankAccount->applyInterest();

var_dump($BankAccount);