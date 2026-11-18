<?php include 'inc/url.php';
include 'admin/process/connection.php';

$row2_events_data;

if (isset($_GET["n"])) {
    $result_project = Database::search("SELECT * FROM `project` WHERE `id`='" . $_GET['n'] . "'");
    $nrow2_project = $result_project->num_rows;

    if ($nrow2_project > 0) {
        $row2_events_data = $result_project->fetch_assoc();
    } else {
        header("Location: projects");
        exit;
    }
} else {
    header("Location: projects");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- ======== Page title & Meta for News Details Page ============ -->
    <title><?php echo htmlspecialchars($row2_events_data["meta_title"]); ?></title>

    <meta name="keywords" content="<?php echo htmlspecialchars($row2_events_data["meta_keywords"]); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($row2_events_data["meta_des"]); ?>">

    <!-- Open Graph for social sharing -->
    <meta property="og:title" content="<?php echo htmlspecialchars($row2_events_data["meta_title"]); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($row2_events_data["meta_des"]); ?>">

    <?php include 'inc/style.php'; ?>
</head>

<body>

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
                                <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Home</a> <em class="em-breadcrub-css">></em> Project <em class="em-breadcrub-css">></em> <?php echo htmlspecialchars($row2_events_data["title"]); ?></li>
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

                            $result3 = Database::search("SELECT * FROM `project_images` WHERE `project_id`='" . $_GET['n'] . "'");
                            $nrow3 = $result3->num_rows;

                            for ($i3 = 1; $i3 <= $nrow3; $i3++) {
                                $row3 = $result3->fetch_assoc();
                            ?>

                                <img src="<?php echo $row3["code"]; ?>" alt="<?php echo htmlspecialchars($row2["title"]); ?>" class="mb-3" draggable="false" style="border-radius: 6px;">

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