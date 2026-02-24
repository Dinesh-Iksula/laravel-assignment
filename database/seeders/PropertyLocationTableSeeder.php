<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyLocationTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('property_location')->truncate();

        DB::unprepared(<<<'SQL'
INSERT INTO `property_location` (`house_id`, `user_id`, `property_type`, `street`, `city`, `state`, `county`, `zip`, `mls_id`, `latitude`, `longitude`, `email_remainder_limit`, `review_invite`, `created_at`, `updated_at`) VALUES
(1, 1, 'sell', '56 Oneida Ave', 'Croton on Hudson', 'NY', 'Westchester County', '10520', NULL, 41.197412, -73.8825418, 0, 1, '2018-06-12 23:11:33', '2018-06-12 23:11:33'),
(2, 2, 'sell', '2045 Stonebriar Dr', 'El Dorado Hills', 'CA', 'El Dorado County', '95762', NULL, 38.6419883, -121.0810084, 0, 1, '2017-08-02 00:54:20', '2017-08-02 00:54:20'),
(3, 2, 'sell', '2540 Oakwood Ave', 'Kannapolis', 'NC', 'Cabarrus County', '28081', NULL, 35.450969, -80.639311, 0, 1, '2017-10-31 20:44:34', '2017-10-31 20:44:34'),
(4, 3, 'sell', '75 Peachtree Ave NW', 'Concord', 'NC', 'Cabarrus County', '28025', NULL, 35.418179, -80.5925834, 0, 1, '2017-11-11 01:55:36', '2017-11-11 01:55:36'),
(5, 3, 'sell', '390 Lorimer St Apt 3E', 'Brooklyn', 'NY', 'Kings County', '11206', NULL, 40.7085328, -73.9481676, 0, 1, '2017-11-17 03:07:32', '2017-11-17 03:07:32'),
(6, 3, 'sell', '19 Dennison Dr', 'East Windsor', 'NJ', 'Mercer County', '08520', NULL, 40.2627698, -74.493987, 0, 1, '2017-11-29 19:36:58', '2017-11-29 19:36:58'),
(7, 4, 'sell', '9887 Short Cut Rd', 'Cloverdale', 'IN', 'Putnam County', '46120', NULL, 39.433874, -86.79356, 0, 1, '2017-12-06 05:03:44', '2017-12-06 05:03:44'),
(8, 5, 'sell', '18206 Elkwood St', 'Reseda', 'CA', 'Los Angeles County', '91335', NULL, 34.2124744, -118.5298196, 0, 1, '2017-12-09 02:56:57', '2017-12-09 02:56:57'),
(9, 6, 'sell', '1001 Sweeping Meadows Ln', 'Cedar Hill', 'TX', 'Dallas County', '75104', NULL, 32.551342, -97.000119, 0, 1, '2017-12-11 01:58:45', '2017-12-11 01:58:45'),
(10, 7, 'sell', '7264 Maplewood Rd', 'Cleveland', 'OH', 'Cuyahoga County', '44130', NULL, 41.3678112, -81.7818888, 0, 1, '2017-12-11 11:01:05', '2017-12-11 11:01:05'),
(11, 7, 'sell', '1007 Glen Creighton Dr', 'Dacono', 'CO', 'Weld County', '80514', NULL, 40.0843658, -104.9298634, 0, 1, '2017-12-17 21:54:40', '2017-12-17 21:54:40'),
(12, 8, 'sell', '500 Dunmire St', 'Frederick', 'CO', 'Weld County', '80530', NULL, 40.1080857, -104.9393707, 0, 1, '2017-12-17 22:32:43', '2017-12-17 22:32:43'),
(13, 9, 'sell', '480 Dunmire St', 'Frederick', 'CO', 'Weld County', '80530', NULL, 40.1079971, -104.9394881, 0, 1, '2017-12-18 20:17:21', '2017-12-18 20:17:21'),
(14, 1, 'sell', '3201 N Seminary Ave Apt 207', 'Chicago', 'IL', 'Cook County', '60657', NULL, 41.9401813, -87.6563076, 0, 1, '2017-12-19 23:46:03', '2017-12-19 23:46:03'),
(15, 10, 'sell', '277 S 79th St Unit 707', 'West Des Moines', 'IA', 'Polk County', '50266', NULL, 41.5647011, -93.8170218, 0, 1, '2017-12-21 06:53:18', '2017-12-21 06:53:18'),
(16, 11, 'sell', '1249 W Cademon Ct', 'Lincoln', 'NE', 'Lancaster County', '68523', NULL, 40.7343711, -96.7422792, 0, 1, '2017-12-27 19:33:30', '2017-12-27 19:33:30'),
(17, 12, 'sell', '16149 Lamb Ave', 'Fort Lupton', 'CO', 'Weld County', '80621', NULL, 40.1059804, -104.7512917, 0, 1, '2018-01-07 22:32:40', '2018-01-07 22:32:40'),
(18, 13, 'sell', '19 Buccaneer St', 'Murrells Inlet', 'SC', 'Horry County', '29576', NULL, 33.5412378, -79.0589066, 0, 1, '2018-01-10 02:12:23', '2018-01-10 02:12:23'),
(19, 16, 'sell', '435 N Michigan Ave Ste 200', 'Chicago', 'IL', 'Cook County', '60611', NULL, 41.890422, -87.623702, 0, 1, '2018-01-10 06:47:58', '2018-01-10 06:47:58'),
(20, 18, 'sell', '77 E Cedar St', 'Chicago', 'IL', 'Cook County', '60611', NULL, 41.902223, -87.625435, 0, 1, '2018-01-10 06:51:11', '2018-01-10 06:51:11'),
(21, 18, 'sell', '105 Camelot Cir', 'Coraopolis', 'PA', 'Allegheny County', '15108', NULL, 40.4927344, -80.1403097, 0, 1, '2018-01-11 07:27:50', '2018-01-11 07:27:50'),
(22, 10, 'sell', '79 Angus Run', 'Seneca', 'SC', 'Oconee County', '29672', NULL, 34.7026988, -82.9943485, 0, 1, '2018-01-12 22:38:58', '2018-01-12 22:38:58'),
(23, 1, 'sell', '5 Via Meseta', 'Rancho Santa Margarita', 'CA', 'Orange County', '92688', NULL, 33.6415856, -117.5879345, 0, 1, '2018-01-17 03:25:30', '2018-01-17 03:25:30'),
(24, 3, 'sell', '2304 Horseshoe Cir', 'Longmont', 'CO', 'Weld County', '80504', NULL, 40.267121, -105.111195, 0, 1, '2018-01-21 10:10:41', '2018-01-21 10:10:41'),
(25, 19, 'sell', '140 Bay St Apt 6D', 'Jersey City', 'NJ', 'Hudson County', '07302', NULL, 40.7208885, -74.0391533, 0, 1, '2018-01-24 09:37:42', '2018-01-24 09:37:42'),
(26, 20, 'sell', '1334 Beechfern Cir', 'Elgin', 'SC', 'Kershaw County', '29045', NULL, 34.1272736, -80.8395301, 0, 1, '2018-01-26 05:25:50', '2018-01-26 05:25:50'),
(27, 21, 'sell', '7845 100th Ave', 'Vero Beach', 'FL', 'Indian River County', '32967', NULL, 27.7370687, -80.5321898, 0, 1, '2018-02-12 03:24:25', '2018-02-12 03:24:25'),
(28, 22, 'sell', '4249 Cumorah Ave', 'Center Valley', 'PA', 'Lehigh County', '18034', NULL, 40.530609, -75.4051646, 0, 1, '2018-02-12 04:42:07', '2018-02-12 04:42:07'),
(29, 22, 'sell', '17 Dellwood Rd', 'Edison', 'NJ', 'Middlesex County', '08820', NULL, 40.5598356, -74.3418387, 0, 1, '2018-02-13 09:23:11', '2018-02-13 09:23:11'),
(30, 23, 'sell', '2 Tarleton Ln', 'Bella Vista', 'AR', 'Benton County', '72715', NULL, 36.428658, -94.247468, 0, 1, '2018-02-21 07:07:57', '2018-02-21 07:07:57'),
(31, 24, 'sell', '109 Foliage View Rd', 'Alabaster', 'AL', 'Shelby County', '35007', NULL, 33.1913848, -86.8434811, 0, 1, '2018-02-22 09:30:15', '2018-02-22 09:30:15'),
(32, 25, 'sell', '3299 Cambridge Ave Apt 3G', 'Bronx', 'NY', 'Bronx County', '10463', NULL, 40.8850633, -73.90847149999999, 0, 1, '2018-02-24 22:47:03', '2018-02-24 22:47:03'),
(33, 26, 'sell', '18206 Elkwood St', 'Reseda', 'CA', 'Los Angeles County', '91335', NULL, 34.212462, -118.5297973, 0, 1, '2018-02-25 03:28:14', '2018-02-25 03:28:14'),
(34, 26, 'sell', '18206 Elkwood St', 'Reseda', 'CA', 'Los Angeles County', '91335', NULL, 34.212462, -118.5297973, 0, 1, '2018-02-25 03:34:20', '2018-02-25 03:34:20'),
(35, 27, 'sell', '18206 Elkwood St', 'Reseda', 'CA', 'Los Angeles County', '91335', NULL, 34.212462, -118.5297973, 0, 1, '2018-02-25 03:35:08', '2018-02-25 03:35:08'),
(36, 27, 'sell', '18206 Elkwood St', 'Reseda', 'CA', 'Los Angeles County', '91335', NULL, 34.212462, -118.5297973, 0, 1, '2018-02-25 03:53:23', '2018-02-25 03:53:23'),
(37, 27, 'sell', '201 Raven Top Dr', 'Penrose', 'NC', 'Transylvania County', '28766', NULL, 35.22867, -82.61825069999999, 0, 1, '2018-02-27 03:02:13', '2018-02-27 03:02:13'),
(38, 27, 'sell', '201 Raven Top Dr', 'Penrose', 'NC', 'Transylvania County', '28766', NULL, 35.22867, -82.61825069999999, 0, 1, '2018-02-27 03:05:48', '2018-02-27 03:05:48'),
(39, 28, 'sell', '4632 Sharon View Rd', 'Charlotte', 'NC', 'Mecklenburg County', '28226', NULL, 35.1383304, -80.80457849999999, 0, 1, '2018-03-03 21:06:56', '2018-03-03 21:06:56'),
(41, 28, 'sell', '4632 Sharon View Rd', 'Charlotte', 'NC', 'Mecklenburg County', '28226', NULL, 35.1383304, -80.80457849999999, 0, 1, '2018-03-03 21:54:42', '2018-03-03 21:54:42'),
(42, 28, 'sell', '117 Sion Ct', 'Rocky Mount', 'NC', 'Nash County', '27803', NULL, 35.9510846, -77.8637272, 0, 1, '2018-03-09 16:18:53', '2018-03-09 16:18:53'),
(43, 28, 'sell', '24 Robert Treat D', 'bridgeport', 'DE', 'New Haven County', '06460', NULL, 41.2280865, -72.9982787, 0, 1, '2018-03-12 22:56:35', '2018-03-12 22:56:35'),
(44, 28, 'sell', '400 Brookside Dr Unit E', 'Andover', 'MA', 'Essex County', '01810', NULL, 42.68645739999999, -71.1964796, 0, 1, '2018-03-17 21:20:59', '2018-03-17 21:20:59'),
(45, 28, 'sell', '50 Avery Park Dr', 'North Andover', 'MA', 'Essex County', '01845', NULL, 42.6375245, -71.05444279999999, 0, 1, '2018-03-19 01:51:38', '2018-03-19 01:51:38'),
(46, 29, 'sell', 'N S 1 Dr', 'Wallace', 'MI', 'Menominee County', '11224', NULL, 45.2542727, -87.69524899999999, 0, 1, '2018-03-20 08:54:58', '2018-03-20 08:54:58'),
(47, 30, 'sell', '73 Chestnut Ave', 'Closter', 'NJ', 'Bergen County', '07624', NULL, 40.965249, -73.951236, 0, 1, '2018-03-24 19:59:36', '2018-03-24 19:59:36'),
(48, 30, 'sell', '18206 Elkwood St', 'Reseda', 'CA', 'Los Angeles County', '91335', NULL, 34.212462, -118.5297973, 0, 1, '2018-03-24 21:42:18', '2018-03-24 21:42:18'),
(49, 31, 'sell', '190 Newport Rd', 'Hull', 'MA', 'Plymouth County', '02045', NULL, 42.28160159999999, -70.8778859, 0, 1, '2018-03-24 23:16:12', '2018-03-24 23:16:12'),
(50, 32, 'sell', '814 Latimer St', 'York', 'PA', 'York County', '17404', NULL, 39.9743209, -76.7310899, 0, 1, '2018-03-27 11:29:46', '2018-03-27 11:29:46'),
(51, 33, 'sell', '305 Hawk View Ct', 'Nashville', 'TN', 'Davidson County', '37207', NULL, 36.246713, -86.774194, 0, 1, '2018-03-28 09:19:56', '2018-03-28 09:19:56');
SQL
        );
    }
}
