<?php
@ session_start();
$session = $_SESSION['id'];
if (!$session) {
    echo"<script>window.location.assign('index.php')</script>";
} else {
    include 'head.php';
    ?>
    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 row" id="main_body">
        <h2>Dashboard <span><small>statistics and more</small><small style="float:right">Welcome<b> <?php echo $_SESSION['name'] ?></b></small></span></h2>
        <div style="background: #ffffff" class="row">
            <a href="#" ><span class="glyphicon glyphicon-home"></span> Home</a> / 
            <a href=""> Dashboard</a>
        </div>
        <div style="padding-top: 15px">
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <p class="glyphicon glyphicon-ok"></p>
                    <p class="glyphicon glyphicon-wrench"></p>
                    <p class="glyphicon glyphicon-refresh"></p>
                    <button type="button" class="close" data-dismiss="panel">&times;</button>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12 col-md-12">
                        <a href="view_account.php"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Admin<br/>
                                <img src="images/administrator-icon.png">
                            </div></a>
                        <a href="community_center/view_center.php"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Community Center<br/>
                                <img src="images/Admin-icon.png">
                            </div></a>
                        <a href="employee_salary_view.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Employee Salary<br/>
                                <img src="images/Money-icon.png">
                            </div></a>
                        <a href="view_product.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Product<br/>
                                <img src="images/product.png">
                            </div></a>
                        <a href="view_stock_in.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Stock In <br/>
                                <img src="images/stock.png">
                            </div></a>
                    </div>
                    <div class="col-lg-12 col-md-12">

                        <a href="stock_out.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Stock Out <br/>
                                <img src="images/stock_out.png">
                            </div></a>
                        <a href="stock_info.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Stock Info <br/>
                                <img src="images/info.png">
                            </div></a>
                        <a href="daily_stock.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Daily Stock Info<br/>
                                <img src="images/daily.png">
                            </div></a>
                        <a href="selling_invoice.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Selling Invoice <br/>
                                <img src="images/sale_invoice.png">
                            </div></a>
                        <a href="selling_report.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Selling Report <br/>
                                <img src="images/sale_report.png">
                            </div></a>
                    </div>
                    <div class="col-lg-12 col-md-12">

                        <a href="purchase_report.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Purchase Report<br/>
                                <img src="images/sales-report-icon.png">
                            </div></a>
                        <a href="cost.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Cost Type<br/>
                                <img src="images/catalog-icon.png">
                            </div></a>
                        <a href="search_cost.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Search cost <br/>
                                <img src="images/cost_search.png">
                            </div></a>
                        <a href="view_cost.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Cost <br/>
                                <img src="images/cost.png">
                            </div></a>
                        <a href="activity_log.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Activity Log <br/>
                                <img src="images/Activity-Monitor-icon.png">
                            </div></a>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <a href="view_menu.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Menus <br/>
                                <img src="images/menus.png">
                            </div></a>
                        <a href="view_bank.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Bank Info<br/>
                                <img src="images/bank-icon (1).png">
                            </div></a>
                        <a href="view_total_balance.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Total Balance<br/>
                                <img src="images/cash-icon.png">
                            </div></a>
                        <a href="email.html"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Email<br/>
                                <img src="images/Emails-Folder-icon.png">
                            </div></a>
                        <a href="logout.php"><div class="col-lg-2 col-md-2 img_button" style="text-align: center">
                                Log Out<br/>
                                <img src="images/Button-Log-Off-icon.png">
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </body>
<?php } ?>