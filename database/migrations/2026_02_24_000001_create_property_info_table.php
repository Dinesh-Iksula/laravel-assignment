<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('property_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('house_id')->index();
            $table->integer('user_id')->index();
            $table->string('title_held_name')->default('');
            $table->integer('listing_status')->default(0)->index();
            $table->string('settlement_status')->nullable()->index();
            $table->integer('built_in')->nullable();
            $table->string('home_type')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->double('bathrooms', 8, 2)->nullable();
            $table->double('finished_area', 8, 2)->nullable();
            $table->integer('stories')->nullable();
            $table->double('lot_size', 8, 2)->nullable();
            $table->string('lot_unit')->nullable();
            $table->double('basement_area', 8, 2)->nullable();
            $table->string('architectural_style')->nullable();
            $table->decimal('hoa_fees', 8, 2)->nullable();
            $table->decimal('commission', 8, 2)->nullable();
            $table->decimal('pricing', 11, 2)->nullable();
            $table->string('title_held')->nullable();
            $table->string('parcel_id')->nullable();
            $table->string('deed_reference')->nullable();
            $table->string('zoning')->nullable();
            $table->string('cooling_system')->nullable();
            $table->string('heating_system')->nullable();
            $table->string('heating_fuel')->nullable();
            $table->text('indoor_amenties')->nullable();
            $table->text('outdoor_amenties')->nullable();
            $table->string('building_amenties')->nullable();
            $table->longText('description')->nullable();
            $table->longText('mls_description')->nullable();
            $table->string('exterior_material')->nullable();
            $table->string('basement')->nullable();
            $table->string('rooftype')->nullable();
            $table->string('parking')->nullable();
            $table->string('view')->nullable();
            $table->string('types_of_rooms')->nullable();
            $table->string('flooring')->nullable();
            $table->string('appliances')->nullable();
            $table->string('water')->nullable();
            $table->string('driveway')->nullable();
            $table->string('sewer')->nullable();
            $table->string('showing_inst')->nullable();
            $table->string('key_safe_desc')->nullable();
            $table->string('key_safe_loc')->nullable();
            $table->string('sales_restrictions')->nullable();
            $table->string('financing_terms')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('mls_number')->nullable();
            $table->tinyInteger('is_delete')->nullable();
            $table->tinyInteger('is_featured')->nullable();
            $table->integer('is_testing')->default(0);
            $table->string('zillow_link')->nullable();
            $table->string('redfin_link')->nullable();
            $table->string('realtor_link')->nullable();
            $table->string('virtual_tour')->nullable();
            $table->string('offer_shorten_link')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_info');
    }
};
