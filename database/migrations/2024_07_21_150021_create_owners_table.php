<?php

use App\Models\Owner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type',['owner','partner']);
            $table->rememberToken();
            $table->timestamps();
        });
        Owner::create([
            'name' => 'Owner',
            'email' => 'owner@owner.com',
            'password' => Hash::make('password'),
            'type' => 'owner',
        ]);
        Owner::create([
            'name' => 'partner',
            'email' => 'partner@partner.com',
            'password' => Hash::make('password'),
            'type' => 'partner',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
