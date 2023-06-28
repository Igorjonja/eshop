<?
class Payment {
    public $type;
    public $iban;
    public $cardNumber;
    public $name;
    public $surname;

    public function __construct($type, $iban, $cardNumber, $name, $surname) {

        if($type == 'karta'){
        $this->type = $type;
    }else{
         echo "undefined type of card";
         return;
    }

        $this->iban = $iban;
        $this->cardNumber = $cardNumber;
        $this->name = $name;
        $this->surname = $surname;
    }
}

$card='karta';
$number='3124144';
$hujumber='**** **** **** 1234';
$name='igor';
$surname='jac';


$payment = new Payment($card, $number, $hujumber, $name, $surname);

echo '<pre>';
var_dump($payment);
// var_dump($payment->name,$payment->surname);