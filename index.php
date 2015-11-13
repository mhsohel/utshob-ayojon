<?php
session_start();
if (isset($_SESSION['id'])) {
    echo"<script>window.location.assign('dashboard.php')</script>";
} else {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/style.css">
            <script src="js/jquery.js" type="text/javascript"></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <style>
                .table th {
                    border-top: none !important;
                    border-bottom: none;
                }
                .table td {
                    border-top: none !important;
                    border-bottom: none;
                }
                table th{
                    border-top: none !important;
                    border-bottom: none;
                }
                body{
                    background: #dfe3ee;
                }
                #head{
                    background: #3b5998;
                    color: #ffffff;
                    padding-left: 5%;
                    font-weight: bold;
                    padding-bottom:10px;
                }
                .btn{
                    width: 100px;
                }
                .btn-primary{
                    background: #E3E7EB;
                    color: black;
                    border: none
                }
            </style>
        </head>
        <body >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="head"><h2>উৎসব আয়োজন  </h2><smaill>......চলুক পার্টি হরদম।</smaill></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top: 10%">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background: #8b9dc3; padding-top: 15px">
                    <form action="login.php" method="post">
                        <table class="table">
                            <tr>
                                <th style="color: #4A555E"><span class="glyphicon glyphicon-user"></span> User Name<br></th>

                                <td>
                                    <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name">
                                </td>
                            </tr>
                            <tr>
                                <th style="color: #4A555E"><span class="glyphicon glyphicon-lock"></span> Password<br></th>
                                <td>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <th style="color: #4A555E"><a href="">Forgot Password? </a></th>
                                <td>
                                    <input type="submit" class="btn btn-primary btn-sm" name="ok" id="ok" style="float: right" value="Login">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><span style="color: red">
                                        <?php
                                        $error = $_SESSION['error'];
                                        if ($error) {
                                            echo "Enter correct usename and password !";
                                            unset($_SESSION['error']);
                                        }
                                        ?>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>



            </div>
            <div class="col-lg-4 col-md-4"></div>


        </body>

    </html>
<?php } ?>