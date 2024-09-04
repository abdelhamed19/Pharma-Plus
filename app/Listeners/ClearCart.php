<?php

namespace App\Listeners;

use App\Repositories\CartRepository\CartRepositoryClass;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ClearCart
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $cart = new CartRepositoryClass();
        $cart->clearCart();
    }
}
