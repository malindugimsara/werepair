<?php 
include 'inc/url.php';
include 'admin/process/connection.php';

$project_id = filter_var($_GET["n"] ?? null, FILTER_VALIDATE_INT);
if (!$project_id) {
    header("Location: projects");
    exit();
}

$result_project = Database::search("SELECT * FROM `project` WHERE `id`=" . intval($project_id));
$nrow2_project = $result_project ? $result_project->num_rows : 0;

if ($nrow2_project > 0) {
    $row2_events_data = $result_project->fetch_assoc();
} else {
    header("Location: projects");
    exit();
}

if (!function_exists('slugify')) {
    function slugify($text) {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        return strtolower($text);
    }
}

$slug_title = slugify($row2_events_data["title"]);
$canonical_url = "https://werepair.lk/project-details?title=" . urlencode($slug_title) . "&n=" . $project_id;

// Fetch first image for SEO
$first_img_query = Database::search("SELECT * FROM `project_images` WHERE `project_id`=" . intval($project_id) . " LIMIT 1");
$share_image = "https://werepair.lk/assets/imgs/fast-laptop-repair.webp";
if ($first_img_query && $first_img_query->num_rows > 0) {
    $first_img_data = $first_img_query->fetch_assoc();
    if (!empty($first_img_data["code"])) {
        $share_image = "https://werepair.lk/" . ltrim($first_img_data["code"], '/');
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($row2_events_data["meta_title"]); ?> | We Repair</title>
    <meta name="description" content="<?php echo htmlspecialchars($row2_events_data["meta_des"]); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($row2_events_data["meta_keywords"]); ?>">
    <meta name="author" content="We Repair">
    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?php echo htmlspecialchars($row2_events_data["meta_title"]); ?> | We Repair">
    <meta property="og:description" content="<?php echo htmlspecialchars($row2_events_data["meta_des"]); ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($share_image); ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($row2_events_data["meta_title"]); ?> | We Repair">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($row2_events_data["meta_des"]); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($share_image); ?>">

    <?php include 'inc/style.php'; ?>
</head>

<body>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TechArticle",
        "headline": "<?php echo addslashes($row2_events_data["title"]); ?>",
        "image": "<?php echo $share_image; ?>",
        "author": {
            "@type": "Organization",
            "name": "We Repair"
        },
        "publisher": {
            "@type": "Organization",
            "name": "We Repair",
            "logo": {
                "@type": "ImageObject",
                "url": "https://werepair.lk/assets/imgs/logos/we-repair.webp"
            }
        },
        "description": "<?php echo addslashes($row2_events_data["meta_des"]); ?>"
    }
    </script>

    <?php include 'inc/header.php'; ?>

    <!-- Page Header Start -->
    <div class="page-header dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <div class="page-header-tag"><i class="fa-solid fa-microchip"></i> Repair Case Study</div>
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($row2_events_data["title"]); ?></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Home</a> <em class="em-breadcrub-css">></em> <a href="<?php echo $url; ?>projects">Projects</a> <em class="em-breadcrub-css">></em> <?php echo htmlspecialchars($row2_events_data["title"]); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <?php echo $row2_events_data["description"]; ?>
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-5">
                    <!-- Project Single Content Start -->
                    <div class="project-single-contemt">

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <?php
                            $result3 = Database::search("SELECT * FROM `project_images` WHERE `project_id`=" . intval($project_id));
                            $nrow3 = $result3 ? $result3->num_rows : 0;

                            for ($i3 = 1; $i3 <= $nrow3; $i3++) {
                                $row3 = $result3->fetch_assoc();
                            ?>
                                <img src="<?php echo htmlspecialchars($row3["code"]); ?>" alt="<?php echo htmlspecialchars($row2_events_data["title"]); ?>" class="mb-3" draggable="false" style="border-radius: 6px;">
                            <?php
                            }
                            ?>
                        </div>
                        <!-- Project Entry End -->

                    </div>
                    <!-- Project Single Content Start -->
                </div>

            </div>
        </div>
    </div>

    <?php include 'inc/footer.php'; ?>

    <?php include 'inc/script.php'; ?>

</body>
</html>
