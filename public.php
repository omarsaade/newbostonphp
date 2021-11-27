<?php



class bankAccount {
    private $balance = 3500 ;
    public function DisplayBalance() {
        return $this->balance;
    }
}

$alex = new BankAccount();
echo $alex->Displaybalance();
echo $alex->balance;// cz its a private proprety and no method is calling like the previous 







?>