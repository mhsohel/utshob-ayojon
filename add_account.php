<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
</html>
<?php
@session_start();
include 'dbconnect.php';
if (isset($_REQUEST['ok'])) {
    if ($error == UPLOAD_ERR_OK) {
        $name = mysql_real_escape_string($_REQUEST['name']);
        $username=  mysql_real_escape_string($_REQUEST['username']);
        $phone = mysql_real_escape_string($_REQUEST['phone']);
        $pass1 = mysql_real_escape_string($_REQUEST['password']);
        $email = mysql_real_escape_string($_REQUEST['email']);
        $access_level=  mysql_real_escape_string($_REQUEST['access_level']);
        $dob = mysql_real_escape_string($_REQUEST['date_of_birth']);
        $nationalID=  mysql_real_escape_string($_REQUEST['national_id']);
        $fname = $_FILES['file']['name'];
        $temp=$_FILES['file']['tmp_name'];
        $type=$_FILES['file']['type'];
        $location = 'upload/';
        $query="insert into admin(username,name,password,email,photo,phone,access_level,date_of_birth,national_id) values('$username','$name','$pass1','$email','$location$fname','$phone','$access_level','$dob','$nationalID')";
        $result=  mysql_query($query);
        if (isset($fname)) {
            if (!empty($fname) && ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png')) {
                move_uploaded_file($temp, $location . $fname);
                echo 'uploaded';
            } else {
                echo 'Ivalid type';
            }
        } else {
            echo 'select image';
        }
        if ($result) {
            echo "<script>window.location.assign('view_account.php')</script>";
        }
    }
}
?>
