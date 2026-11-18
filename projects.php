<?php include 'inc/url.php';
include 'admin/process/connection.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary Meta Tags -->
    <title>Our Projects | We Repair - Computer & Mobile Repair Showcase</title>
    <meta name="description" content="Explore our portfolio of successful computer and mobile repair projects. See how We Repair has restored laptops, desktops, MacBooks, iPhones, and more with expert service." />
    <meta name="keywords" content="repair projects, computer repair portfolio, mobile repair showcase, laptop repair projects, MacBook repair examples, iPhone screen repair portfolio" />
    <meta name="author" content="We Repair" />
    <meta name="robots" content="index, follow" />

    <!-- Canonical -->
    <link rel="canonical" href="https://werepair.lk/projects" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Our Projects | We Repair - Computer & Mobile Repair Showcase" />
    <meta property="og:description" content="Discover our completed computer and mobile repair projects. Trusted laptop, MacBook, desktop, and iPhone repairs with quality parts and expert care." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://werepair.lk/projects" />
    <meta property="og:image" content="https://werepair.lk/assets/imgs/fast-laptop-repair.webp" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Our Projects | We Repair - Computer & Mobile Repair Showcase" />
    <meta name="twitter:description" content="View We Repair’s portfolio of computer and mobile repair projects including laptops, desktops, MacBooks, and iPhones." />
    <meta name="twitter:image" content="https://werepair.lk/assets/imgs/fast-laptop-repair.webp" />

    <?php include 'inc/style.php'; ?>
</head>

<body>

    <?php include 'inc/header.php'; ?>


    <div class="page-header dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <div class="page-header-tag"><i class="fa-solid fa-laptop-medical"></i> Portfolio & Repairs</div>
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our Projects</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Home</a> <em class="em-breadcrub-css">></em> Projects</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>

    

    <!-- 2. Before / After Visual Slider Section (Light Theme) Start -->
    <section class="before-after-section light-theme-section">
        <div class="container">
            <div class="service-sec-header wow fadeInUp">
                <span class="service-sec-badge"><i class="fa-solid fa-code-compare"></i> Real Transformations</span>
                <h2>Before &amp; After <span>Repair Showcase</span></h2>
                <p>Drag the slider left or right to inspect how severely damaged screens, bloated batteries, and dead motherboards are meticulously restored to pristine factory condition.</p>
            </div>

            <!-- Case Switcher Tabs -->
            <div class="ba-tabs-nav wow fadeInUp">
                <button type="button" class="ba-tab-btn active" data-tab="macbook">
                    <i class="fa-brands fa-apple"></i> MacBook Pro Retina Screen
                </button>
                <button type="button" class="ba-tab-btn" data-tab="iphone">
                    <i class="fa-solid fa-mobile-screen"></i> iPhone OLED Display
                </button>
                <button type="button" class="ba-tab-btn" data-tab="battery">
                    <i class="fa-solid fa-battery-three-quarters"></i> Laptop Battery & Service
                </button>
            </div>

            <!-- Interactive Slider Box -->
            <div class="ba-slider-wrap wow fadeInUp" data-wow-delay="0.2s">
                <div class="ba-slider-container" id="baSliderContainer">
                    <!-- After Image (Background - Clean Restored Device) -->
                    <div class="ba-image ba-after">
                        <img src="assets/imgs/ba-macbook-after.webp" id="baImgAfter" alt="Restored Device After Repair">
                        <span class="ba-label after-label"><i class="fa-solid fa-circle-check"></i> RESTORED (AFTER)</span>
                    </div>

                    <!-- Before Image (Overlay clipped at slider position - Damaged Device) -->
                    <div class="ba-image ba-before" id="baBeforeLayer">
                        <img src="assets/imgs/ba-macbook-before.webp" id="baImgBefore" alt="Damaged Device Before Repair">
                        <span class="ba-label before-label"><i class="fa-solid fa-triangle-exclamation"></i> DAMAGED (BEFORE)</span>
                    </div>

                    <!-- Draggable Handle Divider -->
                    <div class="ba-handle" id="baHandle">
                        <div class="ba-handle-line"></div>
                        <div class="ba-handle-btn">
                            <i class="fa-solid fa-chevron-left"></i>
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <div class="ba-handle-line"></div>
                    </div>

                    <!-- Invisible Native Range Input for Flawless Touch & Drag -->
                    <input type="range" min="0" max="100" value="50" class="ba-range" id="baRangeInput" aria-label="Slide to compare before and after repair">
                </div>
                <p class="ba-hint-text"><i class="fa-solid fa-hand-pointer"></i> Drag the center slider left or right to compare</p>
            </div>
        </div>
    </section>
    <!-- 2. Before / After Visual Slider Section End -->

    <!-- 1. Live Repair Track Record (Stats Row) Start -->
    <section class="project-stats-section">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-3 col-sm-6">
                    <div class="project-stat-box wow fadeInUp">
                        <div class="stat-icon-wrap"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="stat-info">
                            <h3>12,500<span style="margin: 5px;">+</span></h3>
                            <p>Devices Restored</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="project-stat-box wow fadeInUp" data-wow-delay="0.1s">
                        <div class="stat-icon-wrap"><i class="fa-solid fa-microchip"></i></div>
                        <div class="stat-info">
                            <h3>98.6<span style="margin: 5px;">%</span></h3>
                            <p>Chip-Level Success Rate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="project-stat-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="stat-icon-wrap"><i class="fa-solid fa-clock"></i></div>
                        <div class="stat-info">
                            <h3>60 <span>Mins</span></h3>
                            <p>Average Turnaround</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="project-stat-box wow fadeInUp" data-wow-delay="0.3s">
                        <div class="stat-icon-wrap"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="stat-info">
                            <h3>100<span style="margin: 5px;">%</span></h3>
                            <p>Genuine Parts Warranty</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1. Live Repair Track Record End -->

    <!-- 3. Completed Projects Grid (Light Theme) Start -->
    <div class="service-page-section light-theme-section">
        <div class="container">
            <div class="service-sec-header wow fadeInUp">
                <span class="service-sec-badge"><i class="fa-solid fa-folder-open"></i> Portfolio</span>
                <h2>Recent Repair <span>Case Studies</span></h2>
                <p>Browse through documented real-world repairs completed by our certified technicians in our Kohuwala laboratory.</p>
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
    <!-- 3. Completed Projects Grid End -->

    <!-- 4. Customer Testimonials Snippet Section Start -->
    <section class="project-testimonials-section">
        <div class="container">
            <div class="service-sec-header wow fadeInUp">
                <div class="trust-rating-pill">
                    <div class="trust-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span><strong>4.9 / 5.0</strong> on Google Reviews (250+ Verified Clients)</span>
                </div>
                <h2>What Customers Say About <span>Our Work</span></h2>
                <p>Read real experiences from everyday device owners, corporate professionals, and creators across Sri Lanka.</p>
            </div>

            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card-modern wow fadeInUp">
                        <div class="testi-header">
                            <div class="testi-stars-row">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="testi-source-tag"><i class="fa-brands fa-google"></i> Google Review</span>
                        </div>
                        <p class="testi-quote">
                            "The authorized Apple dealer quoted me Rs. 240,000 to replace the entire logic board of my dead MacBook Pro M1. We Repair diagnosed a blown capacitor on the power rail and repaired it within 24 hours at a fraction of that cost. Highly recommended!"
                        </p>
                        <div class="testi-author-info">
                            <div class="testi-avatar">DP</div>
                            <div class="testi-meta">
                                <h5>Dilshan Perera</h5>
                                <span>MacBook Pro M1 • Colombo 05</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card-modern wow fadeInUp" data-wow-delay="0.15s">
                        <div class="testi-header">
                            <div class="testi-stars-row">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="testi-source-tag"><i class="fa-brands fa-google"></i> Google Review</span>
                        </div>
                        <p class="testi-quote">
                            "Shattered my iPhone 14 Pro screen completely with black ink bleeding everywhere. Dropped it off at 11 AM and by 12:30 PM it was ready with full TrueTone and responsiveness intact. Super clean and fast service."
                        </p>
                        <div class="testi-author-info">
                            <div class="testi-avatar">SF</div>
                            <div class="testi-meta">
                                <h5>Sachini Fernando</h5>
                                <span>iPhone 14 Pro • Nugegoda</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="testi-card-modern wow fadeInUp" data-wow-delay="0.3s">
                        <div class="testi-header">
                            <div class="testi-stars-row">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="testi-source-tag"><i class="fa-brands fa-google"></i> Google Review</span>
                        </div>
                        <p class="testi-quote">
                            "Spilled coffee over my Dell XPS laptop containing critical medical research. Sent it via Domex courier from Kandy. They performed an ultrasonic bath, repaired corroded traces, recovered all my data, and couriered it back in 48 hours."
                        </p>
                        <div class="testi-author-info">
                            <div class="testi-avatar">KJ</div>
                            <div class="testi-meta">
                                <h5>Dr. Kanishka Jayawardena</h5>
                                <span>Dell XPS • Kandy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. Customer Testimonials Snippet Section End -->

    <script>
    // Before / After Slider Logic
    document.addEventListener('DOMContentLoaded', function () {
        const sliderRange = document.getElementById('baRangeInput');
        const beforeLayer = document.getElementById('baBeforeLayer');
        const handle = document.getElementById('baHandle');
        const imgBefore = document.getElementById('baImgBefore');
        const imgAfter = document.getElementById('baImgAfter');
        const tabBtns = document.querySelectorAll('.ba-tab-btn');

        const caseData = {
            macbook: {
                before: 'assets/imgs/ba-macbook-before.webp',
                after: 'assets/imgs/ba-macbook-after.webp'
            },
            iphone: {
                before: 'upload/project/68887f4908eb31753775945036.webp',
                after: 'assets/imgs/iphone-repair.webp'
            },
            battery: {
                before: 'upload/project/68887eab00c331753775787003.webp',
                after: 'assets/imgs/fast-laptop-repair.webp'
            }
        };

        function updateSlider(val) {
            if (beforeLayer && handle) {
                const rightCut = 100 - val;
                beforeLayer.style.clipPath = 'inset(0 ' + rightCut + '% 0 0)';
                beforeLayer.style.webkitClipPath = 'inset(0 ' + rightCut + '% 0 0)';
                handle.style.left = val + '%';
            }
        }

        if (sliderRange) {
            sliderRange.addEventListener('input', function () {
                updateSlider(this.value);
            });
            updateSlider(sliderRange.value || 50);
        }

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const tab = this.getAttribute('data-tab');
                if (caseData[tab] && imgBefore && imgAfter) {
                    imgBefore.src = caseData[tab].before;
                    imgAfter.src = caseData[tab].after;
                    if (sliderRange) {
                        sliderRange.value = 50;
                        updateSlider(50);
                    }
                }
            });
        });
    });
    </script>

    <?php include 'inc/footer.php'; ?>

    <?php include 'inc/script.php'; ?>

</body>

</html>