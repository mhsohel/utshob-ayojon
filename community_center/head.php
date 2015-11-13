<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>উৎসব আয়োজন</title>
    <link rel="shortcut icon" href="../images/favicon(1).ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../jquery-ui-1.11.4.custom/jquery-ui.css">
    <link rel="stylesheet" href="../css/datatables.css">
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.js" type="text/javascript"></script>
    <script src="../js/myScript.js" type="text/javascript"></script>
    <script src="../js/datatables.js" type="text/javascript"></script>
    <style>
        .align{
            text-align: center;
        }
    </style>
</head>
<body id="body">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <nav class="navbar navbar-inverse navbar-fixed-top ">               
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="../dashboard.html">Brand</a>
            </div>
            <div class="collapse navbar-collapse ">
                <ul class="nav navbar-nav navbar-right" style="padding-right:40px">
                    <li><a href="#"><span class="glyphicon glyphicon-warning-sign"></span> <span style="background: coral; color: #F2F2F2"> 15 </span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> <span style="background: #33cc00; color: #ffffff"> 15 </span></a></li>  
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon glyphicon-user"></span>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="border: 2px solid cadetblue; background: #666666">
                            <li><a href="#"><span class="glyphicon glyphicon glyphicon-user"></span><?php echo $_SESSION["name"] ?></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Inbox</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-globe"></span> Visit site</a></li> 
                            <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Calender</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
                        </ul>
                    </li> 
                </ul>
            </div>              
        </nav>         
    </div>
    <div class="col-lg-12 col-md-12 row" style="padding-top: 50px">
        <div class="col-lg-2 col-md-2 row" style="color: #ffffff">
            <nav class="navbar navbar-inverse">               
                <div class="collapse navbar-collapse row " id="myNavbar" style="padding-top: 10px">
                    <ul id="accordion">
                        <li><div><a href="../dashboard.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></div></li>
                        <li><a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Admin </span></div></a></li>
                        <li><a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Client </span></div></a></li>
                        <li>
                            <div><a href="#"><span class="glyphicon glyphicon-book"></span>
                                    Centers<span class="caret"></span></a></div>
                            <ul>
                                <li><div><a href="view_center.php"><span class="glyphicon glyphicon glyphicon-user"></span> Centers Info</a></div></li>
                                <li><div><a href="#"><span class="glyphicon glyphicon-envelope"></span> Hall Info</a></div></li>
                                <li><div><a href="#"><span class="glyphicon glyphicon-globe"></span> Hall Booking</a></div></li> 
                                <li><div><a href="#"><span class="glyphicon glyphicon-calendar"></span> Photos</a></div></li>
                                <li class="divider"></li>
                                <li><div><a href="#"><span class="glyphicon glyphicon-off"></span> Phone Numbers</a></div></li>
                            </ul>
                        </li> 
                        <li>
                            <div><a href="#"><span class="glyphicon glyphicon-book"></span>
                                    Catering Service<span class="caret"></span></a></div>
                            <ul>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Catering </span></div></a>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Chair </span></div></a>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Table </span></div></a>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Catering Booking </span></div></a>
                            </ul>
                        </li>
                        <li>
                            <div><a href="#"><span class="glyphicon glyphicon-book"></span>
                                    Gate<span class="caret"></span></a></div>
                            <ul>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Gate  </span></div></a>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Gate Booking</span></div></a>
                            </ul>
                        </li>
                        <li>
                            <div><a href="#"><span class="glyphicon glyphicon-book"></span>
                                    Stage<span class="caret"></span></a></div>
                            <ul>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Stage  </span></div></a>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Stage Booking</span></div></a>
                            </ul>
                        </li>
                        <li>
                            <div><a href="#"><span class="glyphicon glyphicon-book"></span>
                                    Lighting<span class="caret"></span></a></div>
                            <ul>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Lighting </span></div></a>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Lighting Booking</span></div></a>
                            </ul>
                        </li>
                        <li>
                            <div><a href="#"><span class="glyphicon glyphicon-book"></span>
                                    Flower<span class="caret"></span></a></div>
                            <ul>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Flower </span></div></a>
                            <a href="view_account.php"><div><span class="glyphicon glyphicon-shopping-cart"></span> <span > Flower Booking</span></div></a>
                            </ul>
                        </li>
                        <li><a href="logout.php"><div><span class="glyphicon glyphicon-export"></span> Logout</div></a></li>
                    </ul>


                </div>              
            </nav>  
        </div>
        
        
        