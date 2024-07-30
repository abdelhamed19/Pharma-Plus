<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->foreignId('user_id')->index()->nullable()->constrained('users')->nullOnDelete();
            $table->enum('status',['pending','processing','completed','decline'])->default('pending');
            $table->float('total_price')->default(0);
            $table->text('notes')->nullable();
            $table->enum('payment_method',['cash','visa','mastercard','fawry'])->default('cash');
            $table->string('payment_status')->default('pending');
            $table->float('shipping_price')->default(0);
            $table->float('discount')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
