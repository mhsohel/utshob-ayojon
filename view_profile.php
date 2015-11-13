
<?php
@session_start();
include 'dbconnect.php';
$id = $_POST['profile_id'];
$sql_1 = "select* from admin where id=$id";
$result_1 = mysql_query($sql_1);
while ($rows = mysql_fetch_array($result_1)) {
    ?>
    <table  class="table  table-bordered" style="background: #ffffff" cellspacing="0" width="100%">
        <tr >
            <th style="text-align: center">User Profile</th>
        </tr>
        <tr style="text-align: center">
            <td><img src="<?php echo $rows['photo'] ?>" height="150px" width="150px"></td>
        </tr>
        <tr>
            <th>User Name</th>
            <td><?php echo $rows['username'] ?></td>
            <th>Full Name</th>
            <td><?php echo $rows['name'] ?></td>
        </tr>
        <tr>
        <tr>
            <th>Email Address</th>
            <td><?php echo $rows['email'] ?></td>
            <th>National ID</th>
            <td><?php echo $rows['national_id'] ?></td>
        </tr>
        <tr>
            <th>Mobile Phone</th>
            <td><?php echo $rows['phone'] ?></td>
            <th>User Type</th>
            <td><?php echo $rows['access_level'] ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td>*********</td>
            <th>Date of Birth</th>
            <td><?php echo $rows['date_of_birth'] ?></td>
        </tr>

<!--        <tr>
            <td colspan="4" style="text-align: right">
                //<?php
//                if ($_SESSION['access_level'] == 'admin' || $rows['id'] == $_SESSION['id']) {
//                    ?>
                    <button id="<?php // echo $rows['id'] ?>" data-toggle="modal" data-target="#update_profile_modal" class="btn btn-lg btn-success">Update</button>
                <?php // } ?>
                <?php
//                if ($_SESSION['access_level'] == 'admin') {
//                    ?>
                    <a href="delete_profile.php?id=<?php // echo $rows['id'] ?>" class="btn btn-lg btn-danger">Delete</a>
                </td>
            </tr>-->
        <?php // } ?>
    </table>
<?php } ?>






