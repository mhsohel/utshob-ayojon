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
            <a href="#" ><span class="glyphicon glyphicon-home"></span> Home</a> / 
            <a href=""> Dashboard</a>
        </div>
        <div style="padding-top: 15px">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <p class="glyphicon glyphicon-ok"></p>
                    <p class="glyphicon glyphicon-wrench"></p>
                    <p class="glyphicon glyphicon-refresh"></p>
                    <button type="button" class="close" data-dismiss="panel">&times;</button>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12 col-md-12">
                        <a href="view_account.php"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Admin<br/>
                                <img src="images/administrator-icon.png">
                            </div></a>
                        <a href="community_center/view_center.php"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Community Center<br/>
                                <img src="images/Admin-icon.png">
                            </div></a>
                        <a href="cataring/view_catering.php"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Catering<br/>
                                <img src="images/Admin-icon.png">
                            </div></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </body>
<?php } ?>