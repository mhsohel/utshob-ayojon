<?php
include '../dbconnect.php';
$id=$_REQUEST['id'];
$query="delete from catering where id='$id'";
$result=  mysql_query($query);
if($result){
    echo"<img src='images/712.GIF'>";
    echo "<script>window.location.assign('view_catering.php')</script>";
}  else {
    echo 'error';
}
