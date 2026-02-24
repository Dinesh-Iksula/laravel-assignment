<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->truncate();

        DB::unprepared(<<<'SQL'
INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `alternate_email`, `password`, `phone_no`, `avatar`, `user_role`, `email_token`, `verified`, `remember_token`, `notifications`, `template_id`, `verification_sent_at`, `account_verifed_at`, `created_at`, `updated_at`, `visitor_ip`) VALUES
(1, 'Amol Sutar', 'Amol', 'Sutar', 'amolsuta123@hotmail.com', NULL, '$2y$10$S1SiaGYmyIyUVlr64fN3KOjkI6gb3PClW2GEDbQDcnVGyq4E9mEpG', '(19) 1143', 'uploads/avatars/1510318745.jpg', 'default', NULL, 1, 'aKHz87knAcwBZA9dd26fRJp5BUlHYEvPXJhKbnODnbAggrUAqYkJ6nuciEtf', 1, '', NULL, NULL, '2017-05-13 10:18:36', '2020-02-14 09:07:39', NULL),
(2, 'Sonam Dudani', 'Sonam', 'Dudani', 'sonamd123@hotmail.com', NULL, '$2y$10$j3nZ.Smu9yTc59ldH997q.lEuh4z5P/.MmZgChDQQrMRGWWArHYIO', NULL, 'https://lh4.googleusercontent.com/-Asht-W8nlRw/AAAAAAAAAAI/AAAAAAAAWmE/tC8hODUSOe4/photo.jpg?sz=50', 'default', NULL, 1, 'oR4GEFvJTxrwZIAhppZnB9yeJn3MIzCQpEmddzOA6ruPQFUg5Go6TUVpV5Sg', 1, '', NULL, NULL, '2017-05-07 07:41:21', '2020-04-28 11:30:17', NULL),
(3, 'Sonam Dudani', 'Sonam', 'Dudani', 'sonamdudani@yahoo.co.in', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10154673433933691/picture?type=normal', 'default', NULL, 1, 'c1pAPLd1XEjhdjf3ctRuVkwA2SUMM1j2KiTYx14CyXsNFdkVD3tsPvphn3WA', 1, '', NULL, NULL, '2017-05-07 08:07:16', '2020-04-28 11:30:17', NULL),
(4, 'Ojonimi Bako', 'Ojonimi', 'Bako', 'oj123@hotmail.com', NULL, '', NULL, 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=50', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 21:53:18', '2020-04-28 11:30:17', NULL),
(5, 'Tiberius Pircalabu', 'Tiberius', 'Pircalabu', 'tiberius.pirc123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10209571085259388/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 21:56:58', '2020-04-28 11:30:17', NULL),
(6, 'Paul Burke', 'Paul', 'Burke', 'mrpaul123@hotmail.com', NULL, '$2y$10$qbZn6j575YNFEVcY.G7qqeQSDF3Jruudr7cMbvmz8BlnXq.T/i5pK', '(10) 0000', 'uploads/avatars/default.jpg', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 21:57:39', '2020-02-14 09:07:39', NULL),
(7, 'Pip Dicker', 'Pip', 'Dicker', 'pipd123@hotmail.com', NULL, '$2y$10$tBPsYA7b.jePZxWJDAjyTOeII7/G6TrLwkzbHIxlkT2QxuWOh0Wka', '2147241333', 'uploads/avatars/default.jpg', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 21:57:40', '2020-02-14 09:07:39', NULL),
(8, 'Derek Lusso', 'Derek', 'Lusso', 'dl123@hotmail.com', NULL, '$2y$10$7O0d/h0q3mKX6D6Z.cR0sey1qyDJaSGGkdwEiz/3BibmJ68ZcNMNi', '(10) 7244', 'uploads/avatars/default.jpg', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 22:32:05', '2020-02-14 09:07:39', NULL),
(9, 'Sam Feuer', 'Sam', 'Feuer', 'mind@mindsmssack.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10154373454751286/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 22:50:05', '2020-04-28 11:30:17', NULL),
(10, 'Pete Mitchell', 'Pete', 'Mitchell', 'petemitchsssell@vassntageap.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10154467722285373/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 22:53:40', '2020-04-28 11:30:17', NULL),
(11, 'Suresh Ratan', 'Suresh', 'Ratan', 's123@hotmail.com', NULL, '$2y$10$cTfBEeIGJFk42yvDJx5ty.YeaZHWN50vlHo8ACKHNgJ/mjJJMeXr.', '(12) 5650', 'uploads/avatars/default.jpg', 'default', NULL, 1, 'KuqEqP3PCpGvKfjurCRrQi1nx83wCYrjmeldJjO4WU9wWWRa8iyhQnsMAQIB', 1, '', NULL, NULL, '2017-05-16 23:01:19', '2020-02-14 09:07:39', NULL),
(12, 'Sanjay Jain', 'Sanjay', 'Jain', 'sanjay_jain@yahoo.com', NULL, '$2y$10$avmXJIpo3mLYNWYgip6FduLG1N/eisSqXNXNM8v9NAXjskt..P9R.', '(17) 5105', 'uploads/avatars/default.jpg', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 23:03:07', '2020-02-14 09:07:39', NULL),
(13, 'Nishant Pant', 'Nishant', 'Pant', 'ashu123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10213253440474563/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 23:12:03', '2020-04-28 11:30:17', NULL),
(14, 'Olivier Capt', 'Olivier', 'Capt', 'olivie123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10210514119903832/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 23:14:41', '2020-04-28 11:30:17', NULL),
(15, 'Joel Wickham', 'Joel', 'Wickham', 'e123@hotmail.com', NULL, '', NULL, 'https://lh6.googleusercontent.com/-uaJsUi_0Xuw/AAAAAAAAAAI/AAAAAAABa1g/QVQ6Nu5pM5E/photo.jpg?sz=50', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 23:20:07', '2020-04-28 11:30:17', NULL),
(16, 'Greg Bessoni', 'Greg', 'Bessoni', 'gbesssssoni@shdare.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/1456311961097159/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-16 23:53:24', '2020-04-28 11:30:17', NULL),
(17, 'Robert Cha', 'Robert', 'Cha', 'rober123@hotmail.com', NULL, '', NULL, 'https://lh6.googleusercontent.com/-WZWQ3ekXtUE/AAAAAAAAAAI/AAAAAAAAIOs/9EuhU8GmNzs/photo.jpg?sz=50', 'default', NULL, 1, 'nox7DxoDk1daGWbqgGpHoQkH1oRloF3OdlINGDTOiRPgAiiVCRGznf4dtEPp', 1, '', NULL, NULL, '2017-05-16 23:57:02', '2020-04-28 11:30:17', NULL),
(18, 'Susie Q', 'Susie', 'Q', 'hello@hello.com', NULL, '$2y$10$5tbhOZvoqnkfr/QKHdUuleG9mw33C5OpdqvftpQ2J4hC1KjmHTfty', '(15) 2341', 'uploads/avatars/default.jpg', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 00:02:03', '2020-02-14 09:07:39', NULL),
(19, 'Allan Liu', 'Allan', 'Liu', 'allan123@hotmail.com', NULL, '$2y$10$SgYrN7xZJzoD.fRKOERpy.ddWgPwAU7TtBv96kzTkdpfrqdLE8nWq', '(10) 5815', 'https://graph.facebook.com/v2.8/1952717678292900/picture?type=normal', 'default', NULL, 1, 'TXjRwLIj99UrsMsI1aQrv99lSnzo6WLKdGvDnqwVPjLBPNj77QTnFIrn9vCu', 1, '', NULL, NULL, '2017-05-17 00:12:28', '2020-04-29 05:11:01', NULL),
(20, 'Fahad Ashraf', 'Fahad', 'Ashraf', 'fhd.a123@hotmail.com', NULL, '', NULL, 'https://lh5.googleusercontent.com/-oAsRNLHHKR4/AAAAAAAAAAI/AAAAAAAAAfE/4GA_4OozJg4/photo.jpg?sz=50', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 00:49:48', '2020-04-28 11:30:17', NULL),
(21, 'al Hartford', 'al', 'Hartford', '2mo123@hotmail.com', NULL, '$2y$10$i2aVG5M7J0oWWfWu6268juPztWK37TJZUmyCtGuAgRSZ0te2lcfgy', '5407201556', 'uploads/avatars/default.jpg', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 01:16:47', '2020-02-14 09:07:39', NULL),
(22, 'Xu Yong Feng', 'Xu', 'Yong', 'xu_yong123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10155421158902764/picture?type=normal', 'default', NULL, 1, '23ZStgwTgx8oV4U3yXeW5OtHLwaSRQ2kXN73qGz85IspmiQUTqAny49K7Rw8', 1, '', NULL, NULL, '2017-05-17 01:18:30', '2020-04-28 11:30:17', NULL),
(23, 'Gopi Sundharam', 'Gopi', 'Sundharam', 'libr123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10155446023198013/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 02:17:47', '2020-04-28 11:30:17', NULL),
(24, 'Amit Ahirrao', 'Amit', 'Ahirrao', 'amitahirrao@msn.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10155303983648200/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 01:29:49', '2020-04-28 11:30:17', NULL),
(25, 'Zama Khan Mohammed', 'Zama', 'Khan', 'mohammed.zama123@hotmail.com', NULL, '', NULL, 'https://lh6.googleusercontent.com/-VI2xXPkEQW4/AAAAAAAAAAI/AAAAAAAAALU/mzffPHuB8zc/photo.jpg?sz=50', 'default', NULL, 1, 'miUv7p6Q2qU3jNJ6J3SmQMlYl55ljktmBFlM6n9fPfnuIItlXTtCeRspYkce', 1, '', NULL, NULL, '2017-05-17 01:43:19', '2020-04-28 11:30:17', NULL),
(26, 'Renato CF', 'Renato', 'CF', 'renatofe123@hotmail.com', NULL, '', NULL, 'https://lh6.googleusercontent.com/-ghrVgOGWz1o/AAAAAAAAAAI/AAAAAAAAeUk/gFgC_OFJkg0/photo.jpg?sz=50', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 02:06:28', '2020-04-28 11:30:17', NULL),
(27, 'Bhoopathy Easwaran', 'Bhoopathy', 'Easwaran', 'bo123@hotmail.com', NULL, '$2y$10$cMQBuGZ0oKTZkSbU1/h8Zu5OORvO/VsnkkjNGemgnm5AW1wSin6QK', '3037487916', 'uploads/avatars/default.jpg', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 02:48:06', '2020-02-14 09:07:39', NULL),
(28, 'Brianna Przybysz Zajicek', 'Brianna', 'Przybysz', 'noelbrsianna@mssssn.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10209864576867433/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 03:44:12', '2020-04-28 11:30:17', NULL),
(29, 'Christiaan de la Fe', 'Christiaan', 'de', 'cad123@hotmail.com', NULL, '', NULL, 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=50', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 03:46:04', '2020-04-28 11:30:17', NULL),
(30, 'Christopher Truman', 'Christopher', 'Truman', 'cleet123@hotmail.com', NULL, '', NULL, 'https://lh5.googleusercontent.com/-d9Aj4Shxe9E/AAAAAAAAAAI/AAAAAAAABPI/KcVCki_yueY/photo.jpg?sz=50', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 03:50:36', '2020-04-28 11:30:17', NULL),
(31, 'Vishal Rewari', 'Vishal', 'Rewari', 'rewari.v123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/10155017332425412/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 05:02:22', '2020-04-28 11:30:17', NULL),
(32, 'Sunny Arora', 'Sunny', 'Arora', 'engineer.123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/1633727433322608/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 05:11:24', '2020-04-28 11:30:17', NULL),
(33, 'Ambarish Chigurala', 'Ambarish', 'Chigurala', 'chamb123@hotmail.com', NULL, '', NULL, 'https://graph.facebook.com/v2.8/1594637193882847/picture?type=normal', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 06:56:03', '2020-04-28 11:30:17', NULL),
(34, 'Animesh Singh', 'Animesh', 'Singh', 'animessdh@invesdstmdytalent.com', NULL, '', NULL, 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=50', 'default', NULL, 1, '0t3VMSTPPSJxPdMqxxyGd9ADoWQj8iFw4TVzhvlQbuR1FwQMOpYIbe2pctTU', 1, '', NULL, NULL, '2017-05-17 08:24:03', '2020-04-28 11:30:17', NULL),
(35, 'Uk Jo', 'Uk', 'Jo', 'verystro123@hotmail.com', NULL, '', NULL, 'https://lh6.googleusercontent.com/-eRjupm0iqvQ/AAAAAAAAAAI/AAAAAAAAB0c/ngB4zQHy73M/photo.jpg?sz=50', 'default', NULL, 1, NULL, 1, '', NULL, NULL, '2017-05-17 08:31:19', '2020-04-28 11:30:17', NULL);
SQL
        );
    }
}
