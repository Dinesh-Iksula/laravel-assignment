<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DumpDataInPropertyImageeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property_images')->truncate();
        $details = DB::table('property_location')->get();
        $images = false;
        foreach ($details as $key => $detail) {

            $name = time() . '.jpg';
            $images[] = [
                'house_id' => $detail->house_id,
                'user_id' => $detail->user_id,
                'img_name' => $name,
                'primary_image' => $name,
                'image_caption' => 'Image Caption ' . $key,
                'created_at' => $detail->created_at,
                'updated_at' => $detail->created_at
            ];
        }

        // dump data in property_images table using insert batch
    }
}
