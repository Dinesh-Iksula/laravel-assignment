<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Property Details List View</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
        
    </head>
    <body>
        
        <div class="container">
            <h2>Property Details List View</h2>
            <table class="table table-striped table-bordered" style="width:100%" id="list_view">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>House ID</th>
                        <th>Property Address</th>
                        <th>Task ID</th>
                        <th>Task Title</th>
                        <th>Updated Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>15</td>
                        <td>277 S 79th St Unit 707, West Des Moines, IA 50266</td>
                        <td>18</td>
                        <td>Federal Lead Paint Disclosure</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12</td>
                        <td>500 Dunmire St, Frederick, CO 80530</td>
                        <td>20</td>
                        <td>Share via Twitter</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>3</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>19</td>
                        <td>Share via Facebook</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>4</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>17</td>
                        <td>Houzeo Relationship Agreement & Disclosures</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>5</td>	
                        <td>16</td>
                        <td>1249 W Cademon Ct,Lincoln,NE 68523</td>
                        <td>35</td>
                        <td>NC - Residential Property and Owners Association Disclosure</td>
                        <td>2018-12-14 21:20:56</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>15</td>
                        <td>277 S 79th St Unit 707, West Des Moines, IA 50266</td>
                        <td>18</td>
                        <td>Federal Lead Paint Disclosure</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>12</td>
                        <td>500 Dunmire St, Frederick, CO 80530</td>
                        <td>20</td>
                        <td>Share via Twitter</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>8</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>19</td>
                        <td>Share via Facebook</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>9</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>17</td>
                        <td>Houzeo Relationship Agreement & Disclosures</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>10</td>	
                        <td>16</td>
                        <td>1249 W Cademon Ct,Lincoln,NE 68523</td>
                        <td>35</td>
                        <td>NC - Residential Property and Owners Association Disclosure</td>
                        <td>2018-12-14 21:20:56</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>15</td>
                        <td>277 S 79th St Unit 707, West Des Moines, IA 50266</td>
                        <td>18</td>
                        <td>Federal Lead Paint Disclosure</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>12</td>
                        <td>500 Dunmire St, Frederick, CO 80530</td>
                        <td>20</td>
                        <td>Share via Twitter</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>13</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>19</td>
                        <td>Share via Facebook</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>14</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>17</td>
                        <td>Houzeo Relationship Agreement & Disclosures</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>15</td>	
                        <td>16</td>
                        <td>1249 W Cademon Ct,Lincoln,NE 68523</td>
                        <td>35</td>
                        <td>NC - Residential Property and Owners Association Disclosure</td>
                        <td>2018-12-14 21:20:56</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>15</td>
                        <td>277 S 79th St Unit 707, West Des Moines, IA 50266</td>
                        <td>18</td>
                        <td>Federal Lead Paint Disclosure</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>12</td>
                        <td>500 Dunmire St, Frederick, CO 80530</td>
                        <td>20</td>
                        <td>Share via Twitter</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>18</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>19</td>
                        <td>Share via Facebook</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>19</td>	
                        <td>12</td>
                        <td>500 Dunmire St,Frederick,CO 80530</td>
                        <td>17</td>
                        <td>Houzeo Relationship Agreement & Disclosures</td>
                        <td>2021-03-12 12:27:43</td>
                    </tr>
                    <tr>
                        <td>20</td>	
                        <td>16</td>
                        <td>1249 W Cademon Ct,Lincoln,NE 68523</td>
                        <td>35</td>
                        <td>NC - Residential Property and Owners Association Disclosure</td>
                        <td>2018-12-14 21:20:56</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function() {
                var table = $('#list_view').DataTable( {
                    "lengthChange": false,
                    "pageLength": 5,
                    "responsive": true
                });
            } );
        </script>
    </body>
</html>
