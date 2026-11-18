<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
<!-- Preloader Start -->
<div class="preloader">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="<?php echo $url;?>assets/imgs/logos/we-repair-m.webp" alt="Loading, please wait..."></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="<?php echo $url;?>">
                    <img src="<?php echo $url;?>assets/imgs/logos/we-repair-wl.webp" alt="We Repair" class="header-logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item <?php if($current_page == 'index' || empty($current_page)) echo 'active'; ?>"><a class="nav-link" href="<?php echo $url;?>">Home</a></li>
                            <li class="nav-item <?php if($current_page == 'about-us') echo 'active'; ?>"><a class="nav-link" href="<?php echo $url;?>about-us">About Us</a></li>
                            <li class="nav-item <?php if($current_page == 'services' || strpos($_SERVER['REQUEST_URI'], 'service/') !== false) echo 'active'; ?>"><a class="nav-link" href="<?php echo $url;?>services">Services</a></li>
                            <li class="nav-item <?php if($current_page == 'projects' || $current_page == 'project-details') echo 'active'; ?>"><a class="nav-link" href="<?php echo $url;?>projects">Projects</a></li>
                            <li class="nav-item <?php if($current_page == 'contact-us') echo 'active'; ?>"><a class="nav-link" href="<?php echo $url;?>contact-us">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Header Right Actions Start -->
                    <div class="header-actions">
                        <a href="tel:+94714021182" class="header-phone-link d-none d-xl-inline-flex">
                            <i class="fa-solid fa-phone"></i>
                            <span>+94 71 402 1182</span>
                        </a>
                        <a href="<?php echo $url;?>contact-us" class="btn-default btn-highlighted header-cta-btn">
                            <span>Get Support</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <!-- Header Right Actions End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->

<script>
(function() {
    var lastScroll = 0;
    var sticky = document.querySelector('.header-sticky');
    if (!sticky) return;

    window.addEventListener('scroll', function() {
        var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // At the very top (<= 30px), always show navbar
        if (currentScroll <= 30) {
            sticky.classList.remove('nav-hidden');
            sticky.classList.add('nav-visible');
            lastScroll = currentScroll;
            return;
        }

        // Ignore tiny deltas
        if (Math.abs(currentScroll - lastScroll) < 6) return;

        if (currentScroll > lastScroll) {
            // Scrolling DOWN -> HIDE NAVBAR
            sticky.classList.remove('nav-visible');
            sticky.classList.add('nav-hidden');
        } else {
            // Scrolling UP -> SHOW NAVBAR
            sticky.classList.remove('nav-hidden');
            sticky.classList.add('nav-visible');
        }

        lastScroll = currentScroll;
    }, { passive: true });
})();
</script>