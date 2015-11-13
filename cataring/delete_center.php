<?php
include '../dbconnect.php';
$id=$_REQUEST['id'];
$query="delete from community_center_info where center_id='$id'";
$result=  mysql_query($query);
if($result){
    echo"<img src='images/712.GIF'>";
    echo "<script>window.location.assign('view_center.php')</script>";
}  else {
    echo 'error';
}
