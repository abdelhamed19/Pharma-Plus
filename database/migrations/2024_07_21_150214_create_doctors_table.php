<?php

use App\Models\Doctor;
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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone',15)->nullable();
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Doctor::create([
            'name' => 'Doctor',
            'email' => 'doctor@doctor.com',
            'password' => Hash::make('password'),
            'phone' => '1234567890',
            'address' => 'Dhaka',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
