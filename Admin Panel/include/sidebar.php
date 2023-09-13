<style>
#sidebar {
    background-color: #104163 !important;
}

#sidebar>div nav>ul {
    background-color: #104163 !important;
    font-family: 'Montserrat';
    border: none;
}

#sidebar nav>ul>li>a .item-inner:hover {
    background-color: #084D22 !important;
    color: #fff;
}

#sidebar nav>ul>li>a .item-inner {
    font-size: 16px !important;
    color: #fff !important;
    font-weight: 500;
}

#sidebar nav>ul>li>a .item-media>i {
    color: #fff !important;
}

.item-content:hover {
    background-color: #084D22;
    color: #fff;
}

.item-content:hover {
    background-color: #084D22;
    color: #fff;
}

#sidebar nav>ul .sub-menu {
    background: #084D22;
    color: #fff;
}

.open {
    background-color: #104163 !important;
    color: #fff;
}

.open a {
    color: #fff !important;
    font-family: 'Montserrat';
    font-weight: 500;
}

.open a:hover {
    color: #000 !important;
}

#sidebar nav>ul .sub-menu>li a {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    font-family: 'Montserrat';
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
                    <a href="javascript:void(0)" style="background-color: #104163;">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Doctors </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="doctor-specilization.php">
                                <span class="title"> Doctor Specialization </span>
                            </a>
                        </li>
                        <li>
                            <a href="add-doctor.php">
                                <span class="title"> Add Doctor</span>
                            </a>
                        </li>
                        <li>
                            <a href="Manage-doctors.php">
                                <span class="title"> Manage Doctors </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" style="background-color: #104163;">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-list"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Services </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="add-services.php">
                                <span class="title"> Add Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="manage-services.php">
                                <span class="title"> Manage Services </span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0)" style="background-color: #104163;">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Users </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="manage-users.php">
                                <span class="title"> Manage Users </span>
                            </a>
                        </li>

                    </ul>
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
                            <a href="manage-patient.php">
                                <span class="title"> Manage Patients </span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="appointment-history.php">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-file"></i>
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
                                <i class="ti-files"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Conatct us Queries </span><i class="icon-arrow"></i>
                            </div>
                        </div>
                    </a>
                    <ul class="sub-menu">

                        <li>
                            <a href="unread-queries.php">
                                <span class="title"> Unread Query </span>
                            </a>
                        </li>

                        <li>
                            <a href="read-query.php">
                                <span class="title"> Read Query </span>
                            </a>
                        </li>

                    </ul>
                </li>



                <li>
                    <a href="doctor-logs.php">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-list"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Doctor Session Logs </span>
                            </div>
                        </div>
                    </a>
                </li>



                <li>
                    <a href="user-logs.php">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-list"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> User Session Logs </span>
                            </div>
                        </div>
                    </a>
                </li>


                <li>
                    <a href="patient-search.php">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-search"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Patient Search </span>
                            </div>
                        </div>
                    </a>
                </li>


            </ul>
            <!-- end: CORE FEATURES -->

        </nav>
    </div>
</div>