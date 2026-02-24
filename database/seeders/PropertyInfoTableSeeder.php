<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyInfoTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('property_info')->truncate();

        DB::unprepared(<<<'SQL'
INSERT INTO `property_info` (`id`, `house_id`, `user_id`, `title_held_name`, `listing_status`, `settlement_status`, `built_in`, `home_type`, `bedrooms`, `bathrooms`, `finished_area`, `stories`, `lot_size`, `lot_unit`, `basement_area`, `architectural_style`, `hoa_fees`, `commission`, `pricing`, `title_held`, `parcel_id`, `deed_reference`, `zoning`, `cooling_system`, `heating_system`, `heating_fuel`, `indoor_amenties`, `outdoor_amenties`, `building_amenties`, `description`, `mls_description`, `exterior_material`, `basement`, `rooftype`, `parking`, `view`, `types_of_rooms`, `flooring`, `appliances`, `water`, `driveway`, `sewer`, `showing_inst`, `key_safe_desc`, `key_safe_loc`, `sales_restrictions`, `financing_terms`, `status`, `mls_number`, `is_delete`, `is_featured`, `is_testing`, `zillow_link`, `redfin_link`, `realtor_link`, `virtual_tour`, `offer_shorten_link`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', 3, NULL, 2002, 'Single Family', 5, 3.00, 4102.00, 2, 18252.00, 'sq.ft.', 0.00, 'Bungalow', '0.00', '3.00', '749000.00', 'Trust', '', '', '', 'Central', 'Forced Air', 'Gas', 'Cable ready, Ceiling fans, Double pane/storm windows, Fire place, Security system, Vaulted ceiling', 'Balcony/patio, Fenced yard, Garden, Lawn,Sprinkler system', 'None', 'Coming soon...  Fantastic home located in a distinctive EDH community close to Hwy 50 for easy commute. No HOA. Newly remodeled. New paint inside and out. New floors throughout. Open floor plan with extra large family entertaining space. Updated kitchen, bathrooms, laundry room, all with new Quartz slab countertops. Gourmet kitchen has stainless appliances and a large island and eating area. Huge master with walk-in closet and plenty of space for a master retreat.  Formal living room and dining room. Fireplace in family room.  3 car garage, and 2 large bonus rooms for office or game room.', '', 'Stucco', 'Unfinished', 'Tile', 'Garage - Attached, Garage - Detached, On-street', 'Mountain, Park', 'Breakfast nook, Recreation room, Dining room, Office, Walk-in closet, Family room, Laundry room, Master bath', 'Carpet, Laminate', 'Dishwasher, Microwave, Range/oven', '', '', '', '', '', '', 'None', 'Cash, Conventional Loan, FHA Loan, VA Loan, CalVet Loan', 1, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2018-02-01 07:48:19', '2020-10-20 22:09:19'),
(2, 2, 2, '', 5, NULL, 1965, 'Single Family', 2, 1.00, 704.00, 1, 12402.00, 'sq.ft.', 800.00, 'Bungalow', '0.00', '2.00', '59900.00', 'Individual', '', '', '', 'Wall', 'Forced Air', 'Gas', 'Cable ready, Double pane/storm windows', 'Fenced yard', 'None', 'a great buy   investors special  Cute house ,great established neighborhood. Currently rented ,,they will stay or move ..Good size back yard . with fence ..', '', 'Brick,Wood', 'No basement', 'Shingle', 'Off-street', 'Territorial', 'Family room', 'Carpet, Linoleum', 'Dishwasher, Range/oven, Refrigerator', '', '', '', '', '', '', 'None', 'Cash, Conventional Loan', 1, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, '2018-02-01 07:48:19', '2021-03-08 20:16:48'),
(3, 3, 2, '', 5, NULL, 2017, 'Single Family', 3, 2.00, 1240.00, 1, 4250.00, 'sq.ft.', 0.00, 'Craftsman', '0.00', '2.00', '139000.00', '', '', '', '', 'Central', 'Heatpump', 'Electric', 'Attic, Ceiling fans', 'Porch', 'None', '3 Bedroom, 2 Bath; Open Floor Plan; Granite Countertops in Kitchen and Bathrooms; Stainless Appliances; Walk-In Master Closet; Large Closets in Bedrooms 2 and 3; Tile in Bathrooms and Laundry; Front Porch with Stone accents;  Contact Blake or Joey at (704) 782-3105', 'Call Blake Troutman to discuss availability of showings and access to house.    -    (704) 782 -3105', 'Stone,Vinyl', 'No basement', 'Shingle', 'Off-street', 'None', 'Walk-in closet, Family room, Laundry room, Master bath', 'Carpet, Laminate, Tile', 'Dishwasher, Microwave, Range/oven, Freezer, Refrigerator', '', '', '', 'Call Owner', 'Combo-See Remarks', 'See Remarks', 'None', 'Cash, Conventional Loan', 1, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, '2018-02-01 07:48:19', '2021-01-18 11:09:10');
SQL
        );
    }
}
