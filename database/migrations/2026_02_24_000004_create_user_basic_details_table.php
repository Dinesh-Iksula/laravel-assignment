<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_basic_details', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('full_name', 50);
            $table->string('phone_number', 13);
            $table->string('email', 30);
            $table->date('dob');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_basic_details');
    }
};
