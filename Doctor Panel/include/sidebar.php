<style>
#sidebar {
    background-color: #104163 !important;
}

#sidebar>div nav>ul {
    background-color: #104163 !important;
    font-family: 'Montserrat';
    border: none;
    font-size: 16px;
    font-weight: 500;
}

#sidebar nav>ul>li>a .item-inner:hover {
    background-color: #084D22 !important;
}

#sidebar nav>ul>li>a .item-inner {
    font-size: 16px !important;
    color: #fff !important;
}

#sidebar nav>ul>li>a .item-media>i {
    color: #fff !important;
}

.item-content:hover {
    background-color: #084D22;
    color: #fff;
}

#sidebar nav>ul .sub-menu {
    background: #084D22;
}

.open {
    background-color: #084D22 !important;
}

#sidebar nav>ul .sub-menu>li a {
    color: #fff;
    font-size: 16px;
    font-family: 'Montserrat';
    font-weight: 500;
}

#sidebar nav>ul .sub-menu>li a:hover {
    background-color: #f5f5f5;
    color: #000;
}

.title {
    font-size: 16px !important;
    font-family: 'Montserrat';
    font-weight: 500;
}

#sidebar nav>ul>li>a .item-inner {
    border: none !important;
}
</style>
<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">

        <nav>
            <ul class="main-navigation-menu">
                <li>
                    <a href="dashboard.php">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Dashboard </span>
                            </div>
                        </div>
                    </a>
                </li>


                <li>
                    <a href="appointment-history.php">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-list"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Appointment History </span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" style="background-color: #104163;">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Patients </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="add-patient.php">
                                <span class="title"> Add Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="manage-patient.php">
                                <span class="title"> Manage Patient </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="search.php">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-search"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Search </span>
                            </div>
                        </div>
                    </a>
                </li>

            </ul>
            <!-- end: CORE FEATURES -->

        </nav>
    </div>
</div>