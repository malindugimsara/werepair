<?php include 'inc/url.php'; ?>

<!doctype html>
<!-- Url Start -->

<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">



<head>

    <meta charset="utf-8" />
    <title>Dashboard | We Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/imgs/logos/we-repair-fav.png">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- main Css-->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Header Start -->
        <?php include 'inc/header.php'; ?>
        <!-- Header End -->

        <!-- Menu Start -->
        <?php include 'inc/menu.php'; ?>
        <!-- Menu End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-column h-100">
                                <div class="row h-100">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="alert alert-success border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                                                    <div class="flex-grow-1 text-truncate">
                                                        Welcome <b><?php echo $_SESSION["sa21-user"]["name"]; ?></b>!
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <button class="dropdown-item text-decoration-underline" onclick="logout();"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></button>
                                                    </div>
                                                </div>

                                                <div class="row align-items-end">
                                                    <div class="col-sm-8">
                                                        <div class="p-3">
                                                            <p class="fs-16 lh-base">You can manage your website using this admin panel.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="px-3 indeximg-pd">
                                                            <img src="assets/imgs/sa.gif" class="img-fluid indeximg-size" alt="We Repair">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-body-->
                                        </div>
                                    </div> <!-- end col-->
                                </div> <!-- end row-->

                            </div>
                        </div> <!-- end col-->

                    </div> <!-- end row-->


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Footer Start -->
            <?php include 'inc/footer.php'; ?>
            <!-- Footer End -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Top btn Start -->
    <?php include 'inc/top-btn.php'; ?>
    <!-- Top btn End -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-analytics.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- Toastify Js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- Function -->
    <script src="assets/js/function.js?v=<?php echo time(); ?>"></script>

</body>

</html>