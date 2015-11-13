
<?php
@session_start();
include '../dbconnect.php';
$id = $_POST['profile_id'];
$sql_1 = "select* from community_center_info where center_id=$id";
$result_1 = mysql_query($sql_1);
while ($rows = mysql_fetch_array($result_1)) {
    ?>
<div class="table-responsive">
    <table  class="table  table-bordered" style="background: #ffffff" cellspacing="0" width="100%">
        <tr >
            <th style="text-align: center">Community Center Information</th>
        </tr>
        <tr style="text-align: center">
            <td><h1><?php echo $rows['name'] ?></h1></td>
        </tr>
        <tr>
            <th>Community Center Name</th>
            <td><?php echo $rows['name'] ?></td>
            <th>Zone</th>
            <td><?php echo $rows['zone'] ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $rows['address'] ?></td>
            <th>Number of Halls</th>
            <td><?php echo $rows['hall_number'] ?></td>
        </tr>
        <tr>
            <th>Rating</th>
            <td><?php echo $rows['rating'] ?></td>
        </tr>
    </table>
</div>
<?php } ?>






