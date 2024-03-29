<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Shoppy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children dropdown">
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="categories.php">Categories Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="product.php"> Product Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="order_master.php"> Order Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="users.php"> User Master</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="contact_us.php"> Contact Us</a>
                    </li>

                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php"><img src="images/logo-white.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="dashboard.php"><img src="images/logo-white.png" alt="Logo"></a>
                    <!-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> -->
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right"
                        style="display: flex; align-items: center; justify-content: center;">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Welcome Admin</a>
                        <a class="nav-link" href="logout.php" style="padding: 0px 1.5rem;">
                            <span style="border-radius: 4px; background: lightgray; padding: 5px 15px;"><i
                                    class="fa fa-power-off"></i> Logout</a></span>
                    </div>
                </div>
            </div>
        </header>