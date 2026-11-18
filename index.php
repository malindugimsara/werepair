<?php include 'inc/url.php';
include 'admin/process/connection.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary Meta Tags -->
    <title>We Repair | Expert Computer & Mobile Repair Services</title>
    <meta name="description" content="We Repair offers fast, reliable, and affordable computer and mobile repair services. Certified technicians fix laptops, desktops, MacBooks, iPhones, and more." />
    <meta name="keywords" content="computer repair, mobile repair, laptop repair, MacBook repair, iPhone screen repair, desktop computer repair, device repair service" />
    <meta name="author" content="We Repair" />
    <meta name="robots" content="index, follow" />

    <!-- Canonical -->
    <link rel="canonical" href="https://werepair.lk/" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="We Repair | Expert Computer & Mobile Repair Services" />
    <meta property="og:description" content="Fast and affordable repairs for laptops, desktops, MacBooks, iPhones, and more. Quality parts and certified technicians you can trust." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://werepair.lk/" />
    <meta property="og:image" content="https://werepair.lk/assets/imgs/fast-laptop-repair.webp" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="We Repair | Expert Computer & Mobile Repair Services" />
    <meta name="twitter:description" content="Reliable computer and mobile repairs including laptops, desktops, MacBooks, and iPhones by certified technicians using quality parts." />
    <meta name="twitter:image" content="https://werepair.lk/assets/imgs/fast-laptop-repair.webp" />

    <?php include 'inc/style.php'; ?>
</head>

<body>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Organization",
                "@id": "https://werepair.lk/#organization",
                "name": "We Repair",
                "url": "https://werepair.lk",
                "logo": "https://werepair.lk/assets/imgs/logos/we-repair.webp",
                "sameAs": [
                    "https://www.facebook.com/profile.php?id=61555425140416"
                ],
                "contactPoint": [{
                    "@type": "ContactPoint",
                    "telephone": "+94 71 402 1182",
                    "contactType": "Customer Service",
                    "areaServed": "LK",
                    "availableLanguage": ["English", "Sinhala"]
                }]
            },
            {
                "@type": "ElectronicsRepairShop",
                "@id": "https://werepair.lk/#repairshop",
                "name": "We Repair - Computer & Mobile Repair Specialists",
                "image": "https://werepair.lk/assets/imgs/fast-laptop-repair.webp",
                "url": "https://werepair.lk",
                "telephone": "+94 71 402 1182",
                "priceRange": "$$",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "5A, Priya Avenue, Kohuwala",
                    "addressLocality": "Kohuwala / Nugegoda",
                    "addressRegion": "Western Province",
                    "postalCode": "10250",
                    "addressCountry": "LK"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 6.8665,
                    "longitude": 79.8894
                },
                "openingHoursSpecification": [
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                        "opens": "09:00",
                        "closes": "19:00"
                    }
                ]
            }
        ]
    }
    </script>

    <?php include 'inc/header.php'; ?>

    <div class="hero hero-bg-image hero-video dark-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <video autoplay muted loop playsinline id="myvideo">
                <source src="assets/video/we-repair.webm" type="video/webm">
                <source src="assets/video/we-repair.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 offset-lg-1">
                    <!-- Hero Content Start -->
                    <div class="hero-content text-center">
                        <!-- Hero Badge Start -->
                        <div class="hero-badge-wrap wow fadeInUp">
                            <span class="hero-badge">
                                <i class="fa-solid fa-screwdriver-wrench"></i> Fast & Reliable Device Repair in Colombo
                            </span>
                        </div>
                        <!-- Hero Badge End -->

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Trusted Experts in Computer & Mobile Repairs</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                We specialize in expert repair services for laptops, MacBooks, desktop computers, iMacs, and iPhones. Whether it’s hardware damage or chip-level motherboard issues, our certified technicians restore your devices quickly and affordably.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Actions Start -->
                        <div class="hero-actions wow fadeInUp" data-wow-delay="0.3s">
                            <a href="contact-us" class="btn-default btn-highlighted">
                                <span>Get a Free Quote</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="https://wa.me/94714021182?text=Hello%20We%20Repair%2C%20I%20would%20like%20to%20get%20a%20quote%20for%20my%20device." target="_blank" class="btn-default btn-secondary-glass">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>WhatsApp Us</span>
                            </a>
                        </div>
                        <!-- Hero Actions End -->

                        <!-- Hero Trust Badges Start -->
                        <div class="hero-trust-row wow fadeInUp" data-wow-delay="0.4s">
                            <div class="trust-badge-item">
                                <i class="fa-solid fa-shield-halved"></i>
                                <span>Warranty on Repairs</span>
                            </div>
                            <div class="trust-badge-item">
                                <i class="fa-solid fa-bolt"></i>
                                <span>Fast Turnaround</span>
                            </div>
                            <div class="trust-badge-item">
                                <i class="fa-solid fa-certificate"></i>
                                <span>Certified Technicians</span>
                            </div>
                            <div class="trust-badge-item">
                                <i class="fa-solid fa-star text-warning"></i>
                                <span>100% Genuine Parts</span>
                            </div>
                        </div>
                        <!-- Hero Trust Badges End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section Start -->
    <div class="about-us light-theme-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-media-card wow fadeInUp">
                        <img src="assets/imgs/laptop-repair-services.webp" alt="About Our Repair Services">
                        <div class="about-experience-badge">
                            <div class="badge-icon"><i class="fa-solid fa-award"></i></div>
                            <div class="badge-text">
                                <h3>10+ Years</h3>
                                <p>Precision Device Restoration</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="service-sec-badge"><i class="fa-solid fa-screwdriver-wrench"></i> Expert Care</span>
                            <h2 class="text-anime-style-3 mt-3 mt-lg-0" data-cursor="-opaque">About Our <span>Repair Services</span></h2>
                            <p class="about-lead-p wow fadeInUp" data-wow-delay="0.1s">
                                We are Colombo's trusted team of certified hardware engineers specializing in laptop, desktop, MacBook, and mobile device repairs.
                            </p>
                            <p class="about-sub-p wow fadeInUp" data-wow-delay="0.2s">
                                From chip-level logic board diagnostics to precision display and battery replacements, our Kohuwala laboratory provides transparent, fast, and certified repairs backed with genuine parts.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Feature Highlights Grid -->
                        <div class="about-features-grid wow fadeInUp" data-wow-delay="0.3s">
                            <div class="about-feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Component-Level Micro Soldering</span>
                            </div>
                            <div class="about-feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>60-Minute Fast-Track Diagnostics</span>
                            </div>
                            <div class="about-feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Genuine Apple &amp; OEM Parts</span>
                            </div>
                            <div class="about-feature-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Written 6-Month Hardware Warranty</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="about-actions-row wow fadeInUp" data-wow-delay="0.4s">
                            <a href="about-us" class="btn-default about-cta-btn">
                                <span>Learn More About Us</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="https://wa.me/94714021182?text=Hello%20We%20Repair%2C%20I%20would%20like%20to%20get%20a%20quote%20for%20my%20device." target="_blank" class="about-wa-btn">
                                <i class="fa-brands fa-whatsapp"></i> Chat with Technician
                            </a>
                        </div>
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <div class="our-services dark-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="service-sec-badge"><i class="fa-solid fa-microchip"></i> Specialized Engineering</span>
                        <h2 class="text-anime-style-3 mt-2" data-cursor="-opaque">Our Repair <span>Services</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Service Button Start -->
                    <div class="section-btn wow fadeInUp text-lg-end" data-wow-delay="0.2s">
                        <a href="services" class="btn-default btn-highlighted">
                            <span>View All Services</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <!-- Service Button End -->
                </div>
            </div>

            <div class="row">
                <!-- Service 1: Apple Devices -->
                <div class="col-lg-4 col-md-6">
                    <div class="modern-service-card wow fadeInUp">
                        <div class="service-card-media">
                            <span class="service-card-badge"><i class="fa-brands fa-apple"></i> Apple Specialist</span>
                            <a href="service/apple-devices-repair-services">
                                <img src="assets/imgs/apple-devices.webp" alt="Apple Devices Repair Services" loading="lazy">
                            </a>
                        </div>
                        <div class="service-card-info">
                            <h3><a href="service/apple-devices-repair-services">Apple Devices</a></h3>
                            <ul class="service-feature-list">
                                <li><i class="fa-solid fa-check"></i> iPhone, iPad, MacBook & iMac Repairs</li>
                                <li><i class="fa-solid fa-check"></i> Genuine Display & Battery Replacement</li>
                                <li><i class="fa-solid fa-check"></i> Chip-Level Logic Board Diagnostics</li>
                            </ul>
                            <div class="service-card-cta">
                                <a href="service/apple-devices-repair-services" class="cta-link">
                                    <span>Explore Repairs</span>
                                </a>
                                <a href="service/apple-devices-repair-services" class="cta-arrow" aria-label="Explore Apple Devices Repairs">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Laptops & Computers -->
                <div class="col-lg-4 col-md-6">
                    <div class="modern-service-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-card-media">
                            <span class="service-card-badge"><i class="fa-solid fa-laptop"></i> Laptops & PC</span>
                            <a href="service/laptop-repair-services">
                                <img src="assets/imgs/laptops-&-computers.webp" alt="Laptops & Computers Repair" loading="lazy">
                            </a>
                        </div>
                        <div class="service-card-info">
                            <h3><a href="service/laptop-repair-services">Laptops & Computers</a></h3>
                            <ul class="service-feature-list">
                                <li><i class="fa-solid fa-check"></i> Dell, HP, Asus, Lenovo & Acer Fixes</li>
                                <li><i class="fa-solid fa-check"></i> Motherboard Repair & No-Power Solutions</li>
                                <li><i class="fa-solid fa-check"></i> SSD Upgrades & Data Recovery</li>
                            </ul>
                            <div class="service-card-cta">
                                <a href="service/laptop-repair-services" class="cta-link">
                                    <span>Explore Repairs</span>
                                </a>
                                <a href="service/laptop-repair-services" class="cta-arrow" aria-label="Explore Laptops & Computers Repairs">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Smart Electronics -->
                <div class="col-lg-4 col-md-6">
                    <div class="modern-service-card wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-card-media">
                            <span class="service-card-badge"><i class="fa-solid fa-microchip"></i> Smart Tech</span>
                            <a href="service/smart-electronics-repair-services">
                                <img src="assets/imgs/dji-drone-repair.webp" alt="Smart Electronics Repair" loading="lazy">
                            </a>
                        </div>
                        <div class="service-card-info">
                            <h3><a href="service/smart-electronics-repair-services">Smart Electronics</a></h3>
                            <ul class="service-feature-list">
                                <li><i class="fa-solid fa-check"></i> DJI Drone Repair & Gimbal Calibration</li>
                                <li><i class="fa-solid fa-check"></i> JBL & Harman Kardon Audio Fixes</li>
                                <li><i class="fa-solid fa-check"></i> Smart TVs & Peripheral Restorations</li>
                            </ul>
                            <div class="service-card-cta">
                                <a href="service/smart-electronics-repair-services" class="cta-link">
                                    <span>Explore Repairs</span>
                                </a>
                                <a href="service/smart-electronics-repair-services" class="cta-arrow" aria-label="Explore Smart Electronics Repairs">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Why Choose Us Section Start -->
    <div class="our-protection light-theme-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-protection-box">
                        <div class="protection-image-content">
                            <!-- Left Content -->
                            <div class="protection-content">
                                <div class="section-title hm-sec-3-css">
                                    <span class="service-sec-badge"><i class="fa-solid fa-shield-halved"></i> Proven Excellence</span>
                                    <h2 class="text-anime-style-3 mt-2" data-cursor="-opaque">Why Choose <span>We Repair?</span></h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.1s">
                                        With over a decade of hands-on engineering, We Repair has built a strong reputation across Colombo for delivering reliable, efficient, and affordable computer and mobile restorations.
                                    </p>
                                </div>

                                <!-- 3 Stat Chips -->
                                <div class="home-stats-strip wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="home-stat-chip">
                                        <h3><span class="counter">11</span>+</h3>
                                        <p>Years in Business</p>
                                    </div>
                                    <div class="home-stat-chip">
                                        <h3><span class="counter">12,500</span>+</h3>
                                        <p>Successful Repairs</p>
                                    </div>
                                    <div class="home-stat-chip">
                                        <h3><span class="counter">98.6</span>%</h3>
                                        <p>Success Rate</p>
                                    </div>
                                </div>

                                <!-- Quick Trust Checks -->
                                <div class="home-protection-checks wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="home-check-item">
                                        <i class="fa-solid fa-bolt"></i>
                                        <span>Fast 60-minute express walk-in diagnostics</span>
                                    </div>
                                    <div class="home-check-item">
                                        <i class="fa-solid fa-shield-halved"></i>
                                        <span>100% Genuine OEM components backed by warranty</span>
                                    </div>
                                    <div class="home-check-item">
                                        <i class="fa-solid fa-lock"></i>
                                        <span>Strict customer data confidentiality &amp; zero data loss</span>
                                    </div>
                                </div>

                                <div class="wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="contact-us" class="btn-default about-cta-btn">
                                        <span>Book an Appointment</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Right Video -->
                            <div class="protection-video-col">
                                <div class="home-video-card wow fadeInUp" data-wow-delay="0.2s">
                                    <video autoplay muted loop playsinline id="protectionvideo1">
                                        <source src="assets/video/we-repair2.webm" type="video/webm">
                                    </video>
                                    <div class="home-video-badge">
                                        <i class="fa-solid fa-circle-play"></i>
                                        <span>Kohuwala Laboratory in Action</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <div class="our-testimonials dark-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <span class="service-sec-badge"><i class="fa-solid fa-star"></i> Real Feedback</span>
                        <h2 class="text-anime-style-3 mt-2" data-cursor="-opaque">What Our <span>Customers Say</span></h2>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="section-title-content wow fadeInUp text-lg-end" data-wow-delay="0.2s">
                        <div class="trust-rating-pill" style="margin: 0; display: inline-flex;">
                            <div class="trust-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span><strong>4.9 / 5.0</strong> on Google Reviews (250+ Clients)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">

                                <!-- Testimonial Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="modern-home-testi-card">
                                        <div class="testi-header">
                                            <div class="testi-stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="testi-google-badge"><i class="fa-brands fa-google"></i> Verified</span>
                                        </div>
                                        <div class="testi-body">
                                            <p>"I brought in my MacBook Pro with a severely cracked Retina display and slow startup. They replaced the screen within 24 hours and explained every step clearly. Flawless workmanship!"</p>
                                        </div>
                                        <div class="testi-footer">
                                            <div class="author-avatar">MF</div>
                                            <div class="author-info">
                                                <h4>Michael Fernando</h4>
                                                <span>MacBook Pro Retina • Colombo 03</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="modern-home-testi-card">
                                        <div class="testi-header">
                                            <div class="testi-stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="testi-google-badge"><i class="fa-brands fa-google"></i> Verified</span>
                                        </div>
                                        <div class="testi-body">
                                            <p>"My ASUS gaming laptop had liquid damage and wouldn't power on. Two other shops told me to throw away the motherboard. We Repair solved it at chip level and saved all my university files!"</p>
                                        </div>
                                        <div class="testi-footer">
                                            <div class="author-avatar">SP</div>
                                            <div class="author-info">
                                                <h4>Sachini Perera</h4>
                                                <span>ASUS ROG Water Damage • Nugegoda</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="modern-home-testi-card">
                                        <div class="testi-header">
                                            <div class="testi-stars">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="testi-google-badge"><i class="fa-brands fa-google"></i> Verified</span>
                                        </div>
                                        <div class="testi-body">
                                            <p>"Needed an urgent battery replacement on my iPhone 13 before an overseas business trip. The technicians completed it in just 30 minutes with original quality and a 6-month warranty. Superb service!"</p>
                                        </div>
                                        <div class="testi-footer">
                                            <div class="author-avatar">TJ</div>
                                            <div class="author-info">
                                                <h4>Tharindu Jayasooriya</h4>
                                                <span>iPhone 13 Battery Fix • Dehiwala</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="our-blog light-theme-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="service-sec-badge"><i class="fa-solid fa-folder-open"></i> Portfolio</span>
                        <h2 class="text-anime-style-3 mt-2" data-cursor="-opaque">Completed Work &amp; <span>Case Studies</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <!-- Service Button Start -->
                    <div class="section-btn wow fadeInUp text-lg-end" data-wow-delay="0.2s">
                        <a href="projects" class="btn-default">
                            <span>View All Projects</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <!-- Service Button End -->
                </div>
            </div>

            <div class="row g-4">
                <?php
                $result2 = Database::search("SELECT * FROM `project` ORDER BY `id` DESC");
                $nrow2 = $result2->num_rows;

                if (!function_exists('slugify')) {
                    function slugify($text)
                    {
                        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
                        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                        $text = preg_replace('~[^-\w]+~', '', $text);
                        $text = trim($text, '-');
                        $text = preg_replace('~-+~', '-', $text);
                        return strtolower($text);
                    }
                }

                for ($i = 1; $i <= $nrow2; $i++) {
                    $row2 = $result2->fetch_assoc();
                    $result3 = Database::search("SELECT * FROM `project_images` WHERE `project_id`='" . $row2["id"] . "' LIMIT 1");
                    if ($result3->num_rows > 0) {
                        $row3 = $result3->fetch_assoc();
                        $imgUrl = $row3["code"];
                    } else {
                        $imgUrl = "https://dummyimage.com/600x400/ebebeb/4a4a4a&text=No+Image";
                    }
                    $slug = slugify($row2["title"]);
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="project-card-modern wow fadeInUp" data-wow-delay="<?php echo ($i * 0.1); ?>s">
                            <div class="project-card-media">
                                <span class="project-card-badge"><i class="fa-solid fa-circle-check"></i> Restored</span>
                                <div class="proj-img-bg" style="background-image: url('<?php echo $imgUrl; ?>');"></div>
                            </div>
                            <div class="project-card-body">
                                <h3>
                                    <a href="project-details?title=<?php echo urlencode($slug); ?>&n=<?php echo urlencode($row2["id"]); ?>">
                                        <?php echo htmlspecialchars($row2["title"]); ?>
                                    </a>
                                </h3>
                                <div class="project-card-specs">
                                    <span class="project-spec-item"><i class="fa-solid fa-microchip"></i> Chip-Level</span>
                                    <span class="project-spec-item"><i class="fa-solid fa-stopwatch"></i> Same-Day</span>
                                    <span class="project-spec-item"><i class="fa-solid fa-shield-halved"></i> 6 Mo Warranty</span>
                                </div>
                                <a href="project-details?title=<?php echo urlencode($slug); ?>&n=<?php echo urlencode($row2["id"]); ?>" class="project-card-btn">
                                    <span>Read Full Case Study</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php include 'inc/footer.php'; ?>

    <?php include 'inc/script.php'; ?>

</body>

</html>