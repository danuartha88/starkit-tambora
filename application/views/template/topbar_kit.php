    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow flex-column flex-sm-row">


                <div class="navbar navbar-brand text-sm-center">
                    <i class="far fa-chart-bar"> REALISASI BEBAN</i>
                </div>

                <!-- Tabs Open -->
                <ul class="nav nav-tabs text-sm-center">

                    <li class="nav-item text-sm-center">
                        <a class="nav-link text-sm-center" href="#">PLTD Labuhan</a>
                    </li>
                    <li class="nav-item text-sm-center">
                        <a class="nav-link text-sm-center" href="#">Tambora</a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('labuhan'); ?>">
                                <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                                Home
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url(); ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                My Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Are you sure to logout?')">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Tabs close -->

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown d-none d-lg-inline no-arrow mt-4">
                        <h6><?= date('d F Y'); ?></h6>

                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->


                </ul>

            </nav>
            <!-- End of Topbar -->