 <!--preloader-->
 <div id="preloader">
     <div id="status">
         <div class="spinner-border text-primary avatar-sm" role="status">
             <span class="visually-hidden">Loading...</span>
         </div>
     </div>
 </div>

 <header id="page-topbar">
     <div class="layout-width">
         <div class="navbar-header">
             <div class="d-flex">
                 <!-- LOGO -->
                 <div class="navbar-brand-box horizontal-logo">
                     <a href="<?php echo $url; ?>" class="logo logo-light">
                         <span class="logo-sm">
                             <img class="menu-fav-logo-size" src="<?php echo $url; ?>assets/imgs/logos/we-repair-m.png" alt="We Repair" height="22">
                         </span>
                         <span class="logo-lg">
                             <img class="menu-header-logo-size" src="<?php echo $url; ?>assets/imgs/logos/we-repair-m.png" alt="We Repair" height="17">
                         </span>
                     </a>
                 </div>

                 <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                     <span class="hamburger-icon">
                         <span></span>
                         <span></span>
                         <span></span>
                     </span>
                 </button>
             </div>

             <div class="d-flex align-items-center">


                 <div class="ms-1 header-item d-none d-sm-flex">
                     <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                         <i class='bx bx-fullscreen fs-22'></i>
                     </button>
                 </div>

                 <div class="dropdown ms-sm-3 header-item topbar-user">
                     <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="d-flex align-items-center">
                             <img class="rounded-circle header-profile-user" src="<?php echo $url; ?>assets/imgs/logos/we-repair-m.png" alt="We Repair">
                             <span class="text-start ms-xl-2">
                                 <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $_SESSION["sa21-user"]["name"]; ?>
                                 </span>
                                 <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Admin</span>
                             </span>
                         </span>
                     </button>
                     <div class="dropdown-menu dropdown-menu-end">
                         <!-- item-->
                         <h6 class="dropdown-header">Welcome <?php echo $_SESSION["sa21-user"]["name"]; ?>!</h6>
                         <button class="dropdown-item" onclick="logout();"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>

 <!-- removeNotificationModal -->
 <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
             </div>
             <div class="modal-body">
                 <div class="mt-2 text-center">
                     <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                     <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                         <h4>Are you sure ?</h4>
                         <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                     </div>
                 </div>
                 <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                     <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                         It!</button>
                 </div>
             </div>

         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->