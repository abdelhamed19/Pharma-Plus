<?php

namespace App\Repositories\CartRepository;

use App\Models\Cart;
use App\Models\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartRepositoryClass implements CartRepositoryInterface
{
    public function getCart()
    {
        $cart = Cart::all();
        return $cart;
    }
    public function removeFromCart($id)
    {
        $cart = Cart::where('uuid', $id)->first();
        return $cart;
    }
    public function clearCart()
    {
        return Cart::query()->delete();
    }
    public function addToCart(Request $request)
    {
        $drug = Drug::find($request->id);
        if ($drug) {
            $cart = Cart::where('drug_id', $drug->id)->first();
            if ($cart) {
                $cart->increment(
                    'quantity',
                    $request->quantity
                );
            } else {
                $cart = Cart::create([
                    'drug_id' => $drug->id,
                    'quantity' => $request->quantity,
                    'price'=>$drug->price
                ]);
            }
            return $cart;
        }
        return 0;
    }
}
