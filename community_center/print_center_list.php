<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Users List</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-2.1.0.min.js"></script>
    <script src="../js/jquery.battatech.excelexport.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btnExport").click(function () {
                $("#tblExport").btechco_excelexport({
                    containerid: "tblExport",
                    datatype: $datatype.Table
                });
            });
        });
        function hide()
        {
            document.getElementById("pr").style.display = "none";
        }
    </script>
</head>
<body style=" text-align: center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding-left: 2%; padding-right: 2%; padding-bottom: 2%; padding-top: 2%">
        <div style="float: left; padding-left: 35px; padding-top: 15px" id="pr">
            <a href="Javascript:" onclick="hide();window.print();"><img src="../images/print.png" height="25px" width="24px"></a>
            <a href="test.php" onclick="hide()"><img src="../images/pdf-download.gif" height="25px" width="24px"></a>
            <a href="print_account_list.php" id="btnExport"> <img src="../images/xls.png" height="25px" width="24px"></a>
        </div><br>
        <h2>Accounts</h2>
        <div >
            <div>
                <table class=" table table-bordered" id="tblExport">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Joining Date</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                include '../dbconnect.php';
                                $sql = "select * from teachers";
                                $result = mysql_query($sql);
                                while ($row = mysql_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['department'] ?></td>
                                        <td><?php echo $row['designation'] ?></td>
                                        <td><?php echo $row['joining_date'] ?></td>
                                        <td style="text-align: center"><img src="<?php echo $row['photo'] ?>" height="55" width="50"></td
                                    </tr>
                                <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>