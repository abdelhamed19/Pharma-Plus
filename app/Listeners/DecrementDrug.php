<?php

namespace App\Listeners;

use App\Models\Drug;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DecrementDrug
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
    public function handle($drug_id): void
    {
        $drug = Drug::find($drug_id)->decrement('stock',1);
    }
}
