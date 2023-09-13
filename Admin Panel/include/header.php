<style>
.navbar .navbar-header .sidebar-toggler {
    font-size: 17px;
    padding-right: 15px;
    color: #fff;
}

header .navbar-header .sidebar-toggler,
header .navbar-header .sidebar-mobile-toggler {
    color: #fff !important;
}

.app-sidebar-fixed .navbar .navbar-header {
    background-color: #104163 !important;
}

h2 {
    color: #104163;
    font-size: 25px;
    font-weight: 600;
    font-family: 'Montserrat';
}

.dropdown-menu.dropdown-dark {
    background-color: #000;
    border: 1px solid #1A1C1E;
}

.dropdown-menu li a {
    color: #fff !important;
    font-family: 'Montserrat';
    font-size: 25px;
    font-weight: 500;
}

.dropdown-menu a:hover {
    color: #fff;
}

header .navbar-collapse .navbar-right>li.open>a {
    background: #ebebeb !important;
    color: #000 !important;
}

header .navbar-header .menu-toggler {
    color: #fff !important;
}

.dropdown-menu.dropdown-dark li a:hover {
    color: #fff;
}
</style>

<?php error_reporting(0); ?>
<header class="navbar navbar-default navbar-static-top">
    <!-- start: NAVBAR HEADER -->
    <div class="navbar-header">
        <a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle"
            data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
            <i class="ti-align-justify"></i>
        </a>
        <a class="navbar-brand" href="../admin/dashboard.php">
            <h2
                style="padding-top:13%; font-weight: 600; color:#fff; font-family: 'Montserrat'; text-transform: uppercase;">
                Healhub</h2>
        </a>
        <a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed"
            data-toggle-target="#app">
            <i class="ti-align-justify"></i>
        </a>
        <a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse"
            href=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="ti-view-grid"></i>
        </a>
    </div>
    <!-- end: NAVBAR HEADER -->
    <!-- start: NAVBAR COLLAPSE -->
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-right">
            <!-- start: MESSAGES DROPDOWN -->
            <li style="padding-top:3% ">
                <h2>Healhub: Health & Wellness for ALL</h2>
            </li>


            <li class="dropdown current-user">
                <a href class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/images.jpg"> <span class="username">



                        Admin
                        <i class="ti-angle-down"></i></i></span>
                </a>
                <ul class="dropdown-menu dropdown-dark">


                    <li>
                        <a href="change-password.php">
                            Change Password
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            Log Out
                        </a>
                    </li>
                </ul>
            </li>
            <!-- end: USER OPTIONS DROPDOWN -->
        </ul>
        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
            <div class="arrow-left"></div>
            <div class="arrow-right"></div>
        </div>
        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
    </div>


    <!-- end: NAVBAR COLLAPSE -->
</header>