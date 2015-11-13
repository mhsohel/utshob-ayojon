
<?php

@session_start();
include '../dbconnect.php';
if (isset($_REQUEST['ok'])) {
    if ($error == UPLOAD_ERR_OK) {
        $id = mysql_real_escape_string($_REQUEST['center_id']);
        $name = mysql_real_escape_string($_REQUEST['name']);
        $zone=  mysql_real_escape_string($_REQUEST['zone']);
        $address = mysql_real_escape_string($_REQUEST['address']);
        $hall_number = mysql_real_escape_string($_REQUEST['hall_number']);
        $rating= mysql_real_escape_string($_REQUEST['rating']);

        echo"<div style='text-align: center; padding-top:200px'><img src='../images/712.GIF'></div>";
       $query="update community_center_info set name='$name',zone='$zone',address='$address',hall_number='$hall_number',rating='$rating' where center_id=$id";
        $result=  mysql_query($query);
        if($result){
            echo "<script>window.location.assign('view_center.php')</script>";
        }
    }
}
?>
