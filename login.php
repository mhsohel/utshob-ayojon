<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
</html>
<?php
@session_start();
include 'dbconnect.php';
$user = mysql_real_escape_string($_POST['user_name']);
$password = (mysql_real_escape_string($_POST['password']));
$sql = "SELECT * from admin where username='$user'";
$resultset = mysql_query($sql);
$row = mysql_fetch_assoc($resultset);
$userId = $row['id'];
$name=$row['name'];
$access_level=$row['access_level'];
$numrowa = mysql_num_rows($resultset);
if ($numrowa == 1) {
    if ($user == $row['username'] && $password == $row['password']) {
        $_SESSION['id'] = $userId;
        $_SESSION['name']=$name;
        $_SESSION['access_level']=$access_level;
        echo"<script>window.location.assign('dashboard.php')</script>";
    } else {
        $_SESSION['error'] = "hello";
        echo"<script>window.location.assign('index.php')</script>";
    }
} else {
    $_SESSION['error'] = "hello";
    echo"<script>window.location.assign('index.php')</script>";
}
?>
