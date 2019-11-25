<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $aItem = [];
    public $iTotalItems;
    public $dTotalPrice;

    public function __construct(Cart $cart = null)
    {
        if ($cart != null) {
            $this->aItem = $cart->aItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        }
    }

    public function add(Product $product)
    {
        if (array_key_exists($product->id, $this->aItem)) {
            $this->aItem[$product->id]['amountItem'] += 1;
        } else {
            $this->aItem[$product->id] = array('id' => $product->id, 'name' => $product->name, 'imgurl' => $product->imgurl, 'price' => $product->price, 'amountItem' => 1);
        }

        $this->iTotalItems += 1;
        $this->dTotalPrice += $product->price;
    }

    public function remove(Product $product)
    {
        if (array_key_exists($product->id, $this->aItem)) {
            $this->aItem[$product->id]['amountItem'] -= 1;
        }

        $this->iTotalItems -= 1;
        $this->dTotalPrice -= $product->price;
    }

    public function removeAll(Product $product)
    {
        $this->iTotalItems -= $this->aItem[$product->id]['amountItem'];
        $this->dTotalPrice -= $this->aItem[$product->id]['price'] * $this->aItem[$product->id]['amountItem'];

        if (array_key_exists($product->id, $this->aItem)) {
            unset($this->aItem[$product->id]);
        }
    }
}
