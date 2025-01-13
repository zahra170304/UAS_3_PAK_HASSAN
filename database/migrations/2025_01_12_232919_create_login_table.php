<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama pengguna
            $table->string('email')->unique(); // Email unik
            $table->timestamp('email_verified_at')->nullable(); // Verifikasi email
            $table->string('password'); // Password
            $table->rememberToken(); // Remember token
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('logins');
    }
};
