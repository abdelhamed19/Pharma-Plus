<?php
namespace App\Repositories\CartRepository;

use Illuminate\Http\Request;

interface CartRepositoryInterface
{
    public function getCart();
    public function removeFromCart($id);
    public function clearCart();
    public function addToCart(Request $request);
}
