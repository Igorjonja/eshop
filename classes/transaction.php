<?
include_once "payment.php";

class Transaction {
    public $cart;
    public $payment;
    public $paid;

    public function __construct() {
        $this->cart = null;
        $this->payment = null;
        $this->paid = false;
    }

    public function addCart($cart) {
        $this->cart = $cart;
    }

    public function addPayment($payment) {
        $this->payment = $payment;

        if(!empty($payment)){
            $this->paid=true;
        }
    }

    public function setPaid($paid) {
        $this->paid = $paid;
    }
}



// $card=array("id=1","id=2","id=3");



$newtrans = new Transaction($cart, $payment);
$newtrans->addCart($card);
$newtrans->addPayment($payment);

var_dump($newtrans);