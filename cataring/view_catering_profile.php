
<?php
@session_start();
include '../dbconnect.php';
$id = $_POST['profile_id'];
$sql_1 = "select* from catering where id=$id";
$result_1 = mysql_query($sql_1);
while ($rows = mysql_fetch_array($result_1)) {
    ?>
<div class="table-responsive">
    <table  class="table  table-bordered" style="background: #ffffff" cellspacing="0" width="100%">
        <tr >
            <th style="text-align: center">Catering Service Information</th>
        </tr>
        
        <tr>
            <th>Food Menu</th>
            <td><?php echo $rows['food_menu'] ?></td>
            <th>Cost</th>
            <td><?php echo $rows['cost'] ?></td>
        </tr>
        
    </table>
</div>
<?php } ?>






