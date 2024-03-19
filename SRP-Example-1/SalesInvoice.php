<?php
require_once 'ShoppingCart.php';
require_once 'EmailService.php';
require_once 'PrintingManager.php';
class SalesInvoice {
    private $cartItems;
    private $customerData;
    public function __construct($cartItems, $customerData) {
        $this->cartItems = $cartItems;
        $this->customerData = $customerData;
    }

    public function createInvoice() {
        $total = $this->calculateTotal();
        $this->saveToDatabase($total);
        $this->printInvoice();
        $this->sendInvoiceToCustomer($this->customerData['email']);
    }

    private function calculateTotal() {
        $total = 0;
        foreach ($this->cartItems as $item) {
            $total += $item->price;
        }
        return $total;
    }

    private function saveToDatabase($total) {
        // Save cart items and total to the database
    }

    private function printInvoice() {
        PrintingManager::print("Invoice content");
    }

    private function sendInvoiceToCustomer($email) {
        EmailService::send($email);
    }
}


