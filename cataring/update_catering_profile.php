
<?php
include '../dbconnect.php';
$id = $_POST['profile_id'];
$sql_1 = "select* from catering where id=$id";
$result_1 = mysql_query($sql_1);
while ($rows = mysql_fetch_array($result_1)) {
    ?>
<form action="update_catering_profile_submit.php" method="get" enctype="multipart/form-data">
        <div class="table-responsive">
            <table class="table table-bordered" style="background: #ffffff" id="table">
                <tbody>
                    <tr>
                <input type="hidden" value="<?php echo $id ?>" name="id">
                <th>Food Menu <span id="name_warning" style="float:  right; color: red"></span></th>
                <td><input type="text" class="form-control" name="food_menu" value="<?php echo $rows['food_menu'] ?>"></td>
                </tr>
                <tr>
                    <th>Cost <span id="username_warning" style="float:  right; color: red"></span></th>
                    <td><input type="text" class="form-control" name="cost" value="<?php echo $rows['cost'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" id="update" class="btn btn-sm btn-primary" value="Update">
                        <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancel</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
</form>
<?php } ?>
                





