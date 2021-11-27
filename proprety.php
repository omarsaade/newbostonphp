<?php 
class BankAccount {
    public $balance = 1;

    public function DisplayBalance() {
        return 'Balance: '.$this->balance;
    }

    public function Withdraw($amount) {
        if (($this->balance)<$amount) {
            echo 'Not enough money';
        } else {
        $this->balance = $this->balance - $amount;
    }
}
}
$alex = new BankAccount;
$alex->Withdraw(5);
echo $alex->DisplayBalance();


?>