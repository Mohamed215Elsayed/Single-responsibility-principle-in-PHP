<?php
class Item {
    public $code;
    public $price;
    public $quantity;
}
//not violate SRP principle
/******************** */
class Stock {
    public static $items = [
        ['code' => '123', 'price' => 10, 'quantity' => 10],
        ['code' => '456', 'price' => 12, 'quantity' => 2],
        ['code' => '789', 'price' => 14, 'quantity' => 1]
    ];
}
//not violate SRP principle
/******************** */
class ShoppingCart {//it is not ok and violate SRP
    private $cartItems = [];
    public function removeFromCart($item) { //it is ok and not violate SRP
        $index = array_search($item, $this->cartItems);
        if ($index !== false) {//item found
            unset($this->cartItems[$index]);//remove it
        }
    }
    public function add($item){//it is not ok and violate SRP.
        foreach (Stock::$items as $stockItem){
            if ($item->code == $stockItem['code'] && $item->quantity <= $stockItem['quantity']) {
                $this->cartItems[] = $item;
                return true;
            }
        }
        return false;//its quantity is not available by this amount
    }
    public function getItemsCount() { //it is ok and not violate SRP
        return count($this->cartItems);
    }
    public function createInvoice() {//it is not ok and violate SRP.
        $total = 0;
        foreach ($this->cartItems as $item) {
            $total += $item->price;//get total price
        }//1 ok
        // Get customer data
        $customerData = $this->getCustomerData();//2 ok
        // Save to database
        $this->saveToDatabase();//3 ok
        //print invoice
        $this->printInvoice();//4  not ok
        //send invoice to customer email
        $this->sendInvoiceToCustomer($customerData['email']);//5 not ok
    }

    private function getCustomerData() {
        // Retrieve customer data from somewhere
        return [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com'
        ];
    }
    private function saveToDatabase() {
        // Save cart items to the database
    }
    private function printInvoice() {
        // Print the invoice
    }
    private function sendInvoiceToCustomer($email) {
        // Send the invoice to the customer's email
    }
}
interface Mail {
    public function send();
}

class WebMail implements Mail {
    public function send() {
        echo "Sending email using WebMail...\n";
    }
}

class Gmail implements Mail {
    public function send() {
        echo "Sending email using Gmail...\n";
    }
}

class Notification {
    private $mailType;

    public function __construct(Mail $mailType) {
        $this->mailType = $mailType;
    }

    public function sendMail() {
        $this->mailType->send();
    }
}
/***************************** */
// Usage example
$item1 = new Item();
$item1->code = '123';
$item1->price = 10;
$item1->quantity = 2;

$item2 = new Item();
$item2->code = '456';
$item2->price = 12;
$item2->quantity = 1;

$cart = new ShoppingCart();
$cart->add($item1);
$cart->add($item2);
$cart->createInvoice();

/***************************/



