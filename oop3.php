<?php

class bankAccount{
    public $name;
    public $balance;

    function account($name, $balance){
        echo "Account Name : " . $this->name = $name . "<br>";
        echo "Balance : " . ($this->balance = $balance) .  "<br> <br>" ;
    }

    function depositMonney($deposit){
        echo $deposit . " has been successfully deposited" . "<br>";
        echo "Your New Balance is " . ($this->balance += $deposit) . "<br><br>";
    }

    function withdrawMoney($withdraw){
        echo $withdraw . " has been withdrawn" . "<br>";
        echo "Your New Balance is " . ($this->balance -= $withdraw) . "<br>";
    }
}

$account = new bankAccount();
$account -> account('Ali', 20000);
$account -> depositMonney(5000);
$account -> withdrawMoney(5000);

?>