
<?php
@session_start();
include 'dbconnect.php';
if (isset($_REQUEST['ok'])) {
    if ($error == UPLOAD_ERR_OK) {
        $id= $_POST['id'];
        $name = mysql_real_escape_string($_POST['name']);
        $username=  mysql_real_escape_string($_POST['username']);
        $phone = mysql_real_escape_string($_POST['phone']);
        $pass1 = mysql_real_escape_string($_POST['password']);
        $email = mysql_real_escape_string($_POST['email']);
        $access_level=  mysql_real_escape_string($_POST['access_level']);
        $dob = mysql_real_escape_string($_POST['date_of_birth']);
        $nationalID=  mysql_real_escape_string($_POST['national_id']);
        $fname = $_FILES['file']['name'];
        $temp=$_FILES['file']['tmp_name'];
        $type=$_FILES['file']['type'];
        $location = 'upload/';
//        echo $id;
//        exit();
        $query="update admin set username='$username',name='$name',password='$pass1',email='$email',photo='$location$fname',phone='$phone',access_level='$access_level',date_of_birth='$dob',national_id='$nationalID' where id=$id";
        $result=  mysql_query($query);
        if (isset($fname)) {
            if (!empty($fname) && ($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png')) {
                move_uploaded_file($temp, $location . $fname);
                echo"<img src='images/712.GIF'>";
            } else {
                echo 'Ivalid type';
            }
        } else {
            echo 'select image';
        }
        if ($result) {
            echo "<script>window.location.assign('view_account.php')</script>";
        }  else {
            echo 'error';
        }
    }
}  
?>
