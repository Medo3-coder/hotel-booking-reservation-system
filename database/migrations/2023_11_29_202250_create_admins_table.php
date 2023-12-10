<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('image', 50)->default('default.png');
            $table->boolean('is_blocked')->default(0);
            $table->boolean('is_notify')->default(true);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        Admin::create([
            'name'     => 'Manager',
            'email'    => 'admin@gmail.com',
            'phone'    => '0555105813',
            'password' => Hash::make(123456789),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('admins');
    }
};
