<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('property_location', function (Blueprint $table) {
            $table->increments('house_id');
            $table->integer('user_id')->index();
            $table->string('property_type');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('county');
            $table->string('zip');
            $table->integer('mls_id')->nullable()->index();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->tinyInteger('email_remainder_limit')->default(0);
            $table->unsignedInteger('review_invite')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        // add state prefix index as in original dump (prefix length 2)
        \DB::statement('ALTER TABLE `property_location` ADD KEY `idx_pl_state` (`state`(2))');
    }

    public function down(): void
    {
        Schema::dropIfExists('property_location');
    }
};
