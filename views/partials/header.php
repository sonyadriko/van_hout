<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Left !-->
        <div class="header-left d-flex align-items-center gap-4">
            <!--! [Start] nxl-head-mobile-toggler !-->
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!--! [Start] nxl-head-mobile-toggler !-->
            <!--! [Start] nxl-navigation-toggle !-->
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>
            <!--! [End] nxl-navigation-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu-toggle !-->
            <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                    <i class="feather-align-left"></i>
                </a>
            </div>
            <!--! [End] nxl-lavel-mega-menu-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu !-->
            <div class="nxl-drp-link nxl-lavel-mega-menu">
                <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                    <a href="javascript:void(0)" id="nxl-lavel-mega-menu-hide">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <!--! [End] nxl-lavel-mega-menu !-->
        </div>
        <!--! [End] Header Left !-->
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">
                <div class="nxl-h-item d-none d-sm-flex">
                    <div class="full-screen-switcher">
                        <a href="javascript:void(0);" class="nxl-head-link me-0"
                            onclick="$('body').fullScreenHelper('toggle');">
                            <i class="feather-maximize maximize"></i>
                            <i class="feather-minimize minimize"></i>
                        </a>
                    </div>
                </div>
                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button" data-bs-auto-close="outside">
                        <img src="../assets/images/avatar.png" alt="user-image" class="img-fluid user-avtar me-0" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/avatar.png" alt="user-image" class="img-fluid user-avtar" />
                                <div>
                                    <?php 
                                        $nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Guest';
                                        $role = isset($_SESSION['role']) ? $_SESSION['role'] : 'Trial';
                                        $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Trial@gmail.com';
                                    ?>
                                    <h6 class="text-dark mb-0"><?php echo $nama ?> <span
                                            class="badge bg-soft-success text-success ms-1"><?php echo $role ?></span>
                                    </h6>
                                    <span class="fs-12 fw-medium text-muted"><?php echo $email?></span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="dropdown">
                                <span class="hstack">
                                    <i
                                        class="wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2"></i>
                                    <span>Active</span>
                                </span>
                                <i class="feather-chevron-right ms-auto me-0"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i
                                            class="wd-10 ht-10 border border-2 border-gray-1 bg-warning rounded-circle me-2"></i>
                                        <span>Always</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i
                                            class="wd-10 ht-10 border border-2 border-gray-1 bg-success rounded-circle me-2"></i>
                                        <span>Active</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i
                                            class="wd-10 ht-10 border border-2 border-gray-1 bg-danger rounded-circle me-2"></i>
                                        <span>Bussy</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i
                                            class="wd-10 ht-10 border border-2 border-gray-1 bg-info rounded-circle me-2"></i>
                                        <span>Inactive</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i
                                            class="wd-10 ht-10 border border-2 border-gray-1 bg-dark rounded-circle me-2"></i>
                                        <span>Disabled</span>
                                    </span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i
                                            class="wd-10 ht-10 border border-2 border-gray-1 bg-primary rounded-circle me-2"></i>
                                        <span>Cutomization</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="dropdown">
                                <span class="hstack">
                                    <i class="feather-dollar-sign me-2"></i>
                                    <span>Subscriptions</span>
                                </span>
                                <i class="feather-chevron-right ms-auto me-0"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                        <span>Plan</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                        <span>Billings</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                        <span>Referrals</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                        <span>Payments</span>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                        <span>Statements</span>
                                    </span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <span class="hstack">
                                        <i class="wd-5 ht-5 bg-gray-500 rounded-circle me-3"></i>
                                        <span>Subscriptions</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-user"></i>
                            <span>Profile Details</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-activity"></i>
                            <span>Activity Feed</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-dollar-sign"></i>
                            <span>Billing Details</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-bell"></i>
                            <span>Notifications</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-settings"></i>
                            <span>Account Settings</span>
                        </a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                        <a href="logout.php" class="dropdown-item">
                            <i class="feather-log-out"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>