
<?php
include '../dbconnect.php';
if (isset($_REQUEST['ok'])) {
    if ($error == UPLOAD_ERR_OK) {
        $id = mysql_real_escape_string($_REQUEST['id']);
        $food_menu = mysql_real_escape_string($_REQUEST['food_menu']);
        $cost=  mysql_real_escape_string($_REQUEST['cost']);
        echo $food_menu;
        exit();
        echo"<div style='text-align: center; padding-top:200px'><img src='../images/712.GIF'></div>";
       $query="update catering set food_menu='$food_menu',cost='$cost' where id='$id'";
        $result=  mysql_query($query) or die("error");
        if($result){
            echo "<script>window.location.assign('view_catering.php')</script>";
        }  else {
            echo 'error';
        }
    }
}
?>
