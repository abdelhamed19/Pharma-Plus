<?php

namespace App\Http\Controllers\api;

use App\Helpers\HTTPResponse;
use App\Http\Controllers\Controller;
use App\Repositories\CartRepository\CartRepositoryClass;
use Illuminate\Http\Request;

class CartController extends Controller
{
    use HTTPResponse;
    protected $cartRepositoryClass;
    public function __construct(CartRepositoryClass $cartRepositoryClass)
    {
        $this->cartRepositoryClass = $cartRepositoryClass;
    }
    public function index()
    {
        $cartItems = $this->cartRepositoryClass->getCart();
        if($cartItems->isEmpty()){
            $this->wrongRequest('No items yet',404);
        }
        return $this->successRequest($cartItems,'Cart Items');
    }
    public function store(Request $request)
    {
        $cartItems = $this->cartRepositoryClass->addToCart($request);
        event('decrement',$cartItems->drug_id);
        if(!$cartItems){
            $this->wrongRequest('Cannot add this item',404);
        }
        return $this->successRequest($cartItems,'Cart Items');
    }
    public function delete($id)
    {
        $cartItem = $this->cartRepositoryClass->removeFromCart($id);
        if(!$cartItem){
            $this->wrongRequest('No item',404);
        }
        return $this->successRequest(null,'Cart Item deleted');
    }
    public function clearCart()
    {
        $cartItems = $this->cartRepositoryClass->clearCart();
        return $this->successRequest(null,'Cart Items deleted');
    }
}
