<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class OrderController extends Controller
{
    public function pay(Request $request)
	{
		$cart = new ShoppingCart;
		$items = $cart->getItems();
		$price = 0;

		foreach ($items as $item) {
			$price += $item['price'] * $item['quantity'];
		}

		$order = new App\Order;

		$order->user_id = auth()->user()->id;
		$order->price = $price * 100;

		$order->save();

		foreach ($items as $item) {
			$product = App\Product::find($item['id'])->id;
			$order->products()->attach($product);
		}

		$cart->clearCart();

		return redirect(url('/home'));
	}
}