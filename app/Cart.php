<?php


namespace App;


class Cart
{
    public $items;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = [
            'quantity' => 0,
            'price' => $item->price,
            'item' => $item
        ];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['quantity']++;
        $storedItem['price'] = $item->price * $storedItem['quantity'];
        $this->items[$id] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }

    public function delete($id)
    {
        if ($this->items) {
            $productsIntoCart = $this->items;
            if (array_key_exists($id, $productsIntoCart)) {
                $priceProductRemove = $productsIntoCart[$id]['price'];
                $this->totalPrice -= $priceProductRemove;

                $this->totalQuantity -= $productsIntoCart[$id]['quantity'];
                unset($productsIntoCart[$id]);
                $this->items = $productsIntoCart;
//                dd($this->items);
            }

        } else {
            $this->totalQuantity = 0;
        }

    }

    public function update()
    {

    }
}
