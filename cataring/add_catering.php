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
        $food_menu = mysql_real_escape_string($_REQUEST['food_menu']);
        $cost=  mysql_real_escape_string($_REQUEST['cost']);
        
        echo"<div style='text-align: center; padding-top:200px'><img src='../images/712.GIF'></div>";
        $query="insert into catering(food_menu,cost) values('$food_menu','$cost')";
        $result=  mysql_query($query) or die("sorry");
        if($result){
            echo "<script>window.location.assign('view_catering.php')</script>";
        }
        
        
    }
}
?>
