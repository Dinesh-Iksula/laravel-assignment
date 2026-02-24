<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('alternate_email')->nullable();
            $table->string('password');
            $table->string('phone_no')->nullable();
            $table->string('avatar')->default('uploads/avatars/default.jpg');
            $table->string('user_role')->nullable();
            $table->string('email_token')->nullable();
            $table->tinyInteger('verified')->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->tinyInteger('notifications')->nullable();
            $table->string('template_id')->default('');
            $table->timestamp('verification_sent_at')->nullable();
            $table->timestamp('account_verifed_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('visitor_ip', 45)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
