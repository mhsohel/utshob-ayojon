<?php
@ session_start();
$session = $_SESSION['id'];
if (!$session) {
    echo"<script>window.location.assign('index.php')</script>";
} else {
    include 'head.php';
    ?>




    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 row" id="main_body">
        <h2>Dashboard <span><small>statistics and more</small><small style="float:right">Welcome<b> <?php echo $_SESSION['name'] ?></b></small></span></h2>
        <div style="background: #ffffff" class="row">
            <a href="../dashboard.php" ><span class="glyphicon glyphicon-home"></span> Home</a> / 
            <a href="view_students.php"> Dashboard</a>
        </div>
        <div style="padding-top: 15px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p><span class="glyphicon glyphicon-align-justify"></span> Student List</p>
                </div>
                <div class="panel-body">
                    <button data-toggle="modal" data-target="#add_account" name="print"  class="btn btn-large btn-primary">Add Food Menu</button>
                    <a href="print_students_list.php" id="print" name="print"  class="btn btn-large btn-success">Print</a>
                    <div class="table-responsive" style="padding-top: 10px">
                        <table  class="table  table-bordered example" style="background: #ffffff" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Food Menu</th>
                                    <th>Cost</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../dbconnect.php';
                                $sql = "select * from catering";
                                $result = mysql_query($sql);
                                while ($row = mysql_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['food_menu'] ?></td>
                                        <td><?php echo $row['cost'] ?></td>
                                        <td><button id="<?php echo $row['id'] ?>" data-toggle="modal" data-target="#view_profile"  class="btn btn-sm btn-success" >View</button></td>
                                        <td><button id="<?php echo $row['id'] ?>" data-toggle="modal" data-target="#edit_profile"  class="btn btn-sm btn-info" >Edit</button></td>
                                        <td><button id="<?php echo $row['id'] ?>" data-toggle="modal" data-target="#delete_profile"  class="btn btn-sm btn-danger" >Delete</button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal for add account Starts Here -->
    <div id="add_account" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <form action="add_catering.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <strong>+ ADD CATERING</strong>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive" style="padding-top: 10px">
                            <table class="table table-bordered" style="background: #ffffff" id="table1">
                                <tr style="text-align: center">
                                    <td><img src="../images/home.png"></td>
                                    <td><img src="../images/lock-icon.png"></td>
                                </tr>
                            </table>
                            <!-- Start changing from here --------------------------------------->
                            <table class="table table-bordered" style="background: #ffffff" id="table">
                                <tbody>
                                    <tr>
                                        <th>Food Menu <span id="name_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="food_menu" placeholder=" Food Menu"></td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Cost <span id="username_warning" style="float:  right; color: red"></span></th>
                                        <td><input type="text" class="form-control" name="cost" placeholder="Cost"></td>
                                    </tr>

                                    <!----- End changing here --------------------------->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name='ok' class="btn btn-sm btn-primary" value="Insert">
                        <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal add account Ends Here -->


    <!-- Modal for Update account Starts Here -->
    <div id="edit_profile" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">

            <!-- Modal content-->

            <div class="modal-content">
<!--                <form action="update_catering_profile_submit.php" method="post" enctype="multipart/form-data">-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <strong>Edit Profile</strong>
                    </div>
                    <div class="modal-body">
                        <div id="edit_body"><div style='text-align: center; padding-top:60px; padding-bottom: 60px'><img src='../images/712.GIF'></div></div>
                    </div>
                    <div class="modal-footer">
                        
                    </div>
<!--                </form>-->

            </div>
        </div>
    </div>
    <!-- Modal edit profile Ends Here -->

    <!-- Modal for view profile Starts Here -->
    <div id="view_profile" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <strong>Profile</strong>
                </div>
                <div class="modal-body">
                    <div id="view_body"> <div style='text-align: center; padding-top:60px; padding-bottom: 60px'><img src='../images/712.GIF'></div></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal for view profile ends here -->

    <!-- Modal for delete Starts Here -->
    <div id="delete_profile" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">

            <!-- Modal content-->

            <div class="modal-content">
                <form action="delete_catering.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <strong style="color:red">Attention !</strong>
                    </div>
                    <div class="modal-body">
                        <i class="fa fa-warning fa-3x" style="color: red"></i>  Are you sure you want to delete this record?
                        <input type="hidden" id="id" name="id" value="">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="update" class="btn btn-sm btn-primary" value="Submit">
                        <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Modal edit profile Ends Here -->
    </body>

<?php } ?>

<script>
    $(document).ready(function () {
        $('.example').delegate("button", "click", function (event) {
            var id = event.target.id;
            $.ajax({
                url: 'view_catering_profile.php',
                method: 'post',
                data: {profile_id: id},
                success: function (data) {
                    $('#view_body').html(data);
                }
            })
        })

        $('.example').delegate("button", "click", function (event) {
            var id = event.target.id;
            $.ajax({
                url: 'update_catering_profile.php',
                method: 'post',
                data: {profile_id: id},
                success: function (data) {
                    $('#edit_body').html(data);
                }
            })
        })
        $('button').click(function (event) {
            var id = event.target.id;
            $('#id').val(id);
        })
    })
</script>