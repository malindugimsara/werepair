<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION["sa21-user"])) {
    header("Location: index.php");
    exit();
}
?>
<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar="light" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In | We Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/imgs/logos/we-repair-fav.png">

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

    <div>

        <section>
            <div class="container">
                <div class="row justify-content-center align-items-center vh-height-100">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4 login-sec-shadow">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Admin !</h5>
                                    <p class="text-muted">Sign in to continue to dashboard.</p>
                                </div>
                                <div class="p-2 mt-4">

                                    <?php
                                    $username = "";
                                    $remember_checked = false;

                                    if (isset($_COOKIE["sa21-username"])) {
                                        $username = htmlspecialchars($_COOKIE["sa21-username"], ENT_QUOTES, 'UTF-8');
                                        $remember_checked = true;
                                    }
                                    ?>

                                    <form>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Enter username" value="<?php echo $username; ?>" onkeyup="sign_in_error_clean();">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" value="" onkeyup="sign_in_error_clean();" autocomplete="current-password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="auth-remember-check" <?php echo $remember_checked ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" data-toast-sign-in id="sign-in-btn-dis-status" type="button" onclick="sign_in();">Sign In</button>
                                            <button type="button" class="btn btn-success w-100 btn-load d-none" id="sign-in-btn-loading-button" style="cursor: wait;">
                                                <span class="d-flex align-items-center">
                                                    <span class="flex-grow-1 me-2" id="eme_sign_up_loading_btn_content">
                                                        Processing...
                                                    </span>
                                                    <span class="spinner-grow flex-shrink-0" role="status">
                                                        <span class="visually-hidden" id="eme_sign_up_loading_btn_content2">Processing...</span>
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
        <?php include 'inc/footer.php'; ?>
        <!-- Footer End -->

    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="assets/js/pages/password-addon.init.js"></script>
    <!-- Function -->
    <script src="assets/js/function.js"></script>
</body>

</html>