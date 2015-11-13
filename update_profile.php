
                    <?php
                    include 'dbconnect.php';
                    $id = $_POST['profile_id'];
                    $sql_1 = "select* from admin where id=$id";
                    $result_1 = mysql_query($sql_1);
                    while ($rows = mysql_fetch_array($result_1)) {
                        ?>
                    <form action="update_profile_submit.php" method="post" enctype="multipart/form-data">
                            <table class="table table-bordered" style="background: #ffffff" id="table">
                                <tbody>
                                    <tr>
                                        <th>Full Name <span id="name_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="name" value="<?php echo $rows['name'] ?>" ></td>
                                    </tr>
                                    <tr>
                                        <th>User Name <span id="username_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="username" value="<?php echo $rows['username'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>National ID <span id="n_id_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="national_id" value="<?php echo $rows['national_id'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Date of Birth<span id="date_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" id="date" name="date_of_birth" value="<?php echo $rows['date_of_birth'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Password <span id="password_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="password" value="<?php echo $rows['password'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Email <span id="email_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="email" value="<?php echo $rows['email'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Mobile Phone <span id="phone_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="phone" value="<?php echo $rows['phone'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td><img src="<?php echo $rows['photo'] ?>" height="150px" width="150px"> <input type="file" class="form-control" name="file" ></td>
                                    </tr>
                                    <tr>
                                        <th>User Type <span id="type_warning" style="float:  right; color: red"></span></th>
                                        <td>
                                            <select class="form-control" name="access_level">
                                                <option value="">Select Type</option>
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                            <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: right">
                                            <input type="submit" name="ok" class="btn btn-sm btn-success" value="Update">
                                            <button data-dismiss="modal" class="btn btn-sm btn-primary">Cancel</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    <?php } ?>
                





