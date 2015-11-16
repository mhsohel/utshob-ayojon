
<?php
include '../dbconnect.php';
$id = $_POST['profile_id'];
$sql_1 = "select* from community_center_info where center_id=$id";
$result_1 = mysql_query($sql_1);
while ($rows = mysql_fetch_array($result_1)) {
    ?>
    <form action="update_center_profile_submit.php" method="post" enctype="multipart/form-data">
        <div class="table-responsive">
            <table class="table table-bordered" style="background: #ffffff" id="table">
                <tbody>
                    <tr>
                <input type="hidden" value="<?php echo $id ?>" name="center_id">
                <th>Community Center Name <span id="name_warning" style="float:  right; color: red"></span></th>
                <td><input type="text" class="form-control" name="name" value="<?php echo $rows['name'] ?>"></td>
                </tr>
                <tr>
                    <th>Location Zone<span id="username_warning" style="float:  right; color: red"></span></th>
                    <td>
                        <select class="form-control" name="zone">
                            <option value="">Select Zone</option>
                            <?php
                            include '../dbconnect.php';
                            $sql = "select * from zone";
                            $result = mysql_query($sql);
                            while ($row = mysql_fetch_array($result)) {
                                ?>
                                <option value="<?php echo $row['zone'] ?>"><?php echo $row['zone'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Address<span id="username_warning" style="float:  right; color: red"></span></th>
                    <td><input type="text" class="form-control" name="address" value="<?php echo $rows['address'] ?>"></td>
                </tr>
                <tr>
                    <th>Number Of Halls <span id="username_warning" style="float:  right; color: red"></span></th>
                    <td><input type="text" class="form-control" name="hall_number" value="<?php echo $rows['hall_number'] ?>"></td>
                </tr>
                <tr>
                    <th>Rating <span id="username_warning" style="float:  right; color: red"></span></th>
                    <td><input type="text" class="form-control" name="rating" value="<?php echo $rows['rating'] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">
                        <input type="submit" name="ok" class="btn btn-sm btn-success" value="Update">
                        <button data-dismiss="modal" class="btn btn-sm btn-primary">Cancel</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </form>
<?php } ?>
                





