<?php 
require_once 'Stock.php';
class ShoppingCart {
    private $cartItems = [];
    public function removeFromCart($item) {//ok
        $index = array_search($item, $this->cartItems);
        if ($index !== false) {
            unset($this->cartItems[$index]);//remove it
        }
    }
    public function add($item) {
        if (Stock::isAvailableQuantity($item)) {
            $this->cartItems[] = $item;
            echo "item is added successfully";
            return true;
        }
        echo "try again";
        return false;
    }

    public function getItemsCount() {//ok
        return count($this->cartItems);
    }
}
$cart = new ShoppingCart();
