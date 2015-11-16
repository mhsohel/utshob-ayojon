<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
</html>
<?php
@session_start();
include '../dbconnect.php';
if (isset($_REQUEST['ok'])) {
    if ($error == UPLOAD_ERR_OK) {
        $name = mysql_real_escape_string($_REQUEST['name']);
        $zone=  mysql_real_escape_string($_REQUEST['zone']);
        $address = mysql_real_escape_string($_REQUEST['address']);
        $hall_number = mysql_real_escape_string($_REQUEST['hall_number']);
        $rating= mysql_real_escape_string($_REQUEST['rating']);
        
        echo"<div style='text-align: center; padding-top:200px'><img src='../images/712.GIF'></div>";
        $query="insert into community_center_info(name,zone,address,hall_number,rating) values('$name','$zone','$address','$hall_number','$rating')";
        $result=  mysql_query($query) or die("sorry");
        if($result){
            echo "<script>window.location.assign('view_center.php')</script>";
        }
        
        
    }
}
?>
