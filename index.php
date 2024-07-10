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
        return "Your balance is $balance";
    }

    public function getBalance() {
        $this->getBalance = $getBalance;
        {
            return "Your balance is $balance";
        }
    }
}

$BankAccount = new BankAccount(100);

echo $balance;