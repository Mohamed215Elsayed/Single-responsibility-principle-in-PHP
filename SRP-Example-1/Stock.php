<?php
require_once 'Item.php';
class Stock
{
    public static $items = [
        ['code' => '123', 'price' => 10, 'quantity' => 10],
        ['code' => '456', 'price' => 12, 'quantity' => 2],
        ['code' => '789', 'price' => 14, 'quantity' => 1]
    ];
    public static function isAvailableQuantity($item)
    {
        foreach (self::$items as $stockItem) {
            if ($item->code == $stockItem['code'] && $item->quantity < $stockItem['quantity']) {
                echo "ok it is available";
                return true;
            }
        }
        echo "the stock contains on quantity less than needed";
        return false;
    }
}
//not violate sRP principle
$stock = new Stock();
$item = new Item();
$item->code = '456';
$item->quantity = 1;
// Stock::isAvailableQuantity($item);//true
$stock->isAvailableQuantity($item);//true also