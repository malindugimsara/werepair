<?php include 'inc/url.php'; ?>
<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">

<head>

    <meta charset="utf-8" />
    <title>Project Management | We Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/imgs/logos/we-repair-fav.png">

    <!-- gridjs css -->
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

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
    <!-- quill css -->
    <link href="assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />


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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Project Management</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Project Management</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Project List</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".article-add-modal">Add Project</button>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-nowrap table-striped-columns mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Add On</th>
                                                    <th scope="col">Last Updated On</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                require 'process/connection.php';
                                                $result_set = Database::search("SELECT * FROM `project` ORDER BY `add_on` DESC");
                                                $result_count =  $result_set->num_rows;

                                                if ($result_count > 0) {
                                                    for ($x_article = 0; $x_article < $result_count; $x_article++) {
                                                        $result_data = $result_set->fetch_assoc();

                                                        $title = substr($result_data["title"], 0, 50);

                                                ?>
                                                        <tr>
                                                            <td><?php echo $result_data["id"]; ?></td>
                                                            <td><?php echo $title . "..."; ?></td>
                                                            <td><?php echo $result_data["add_on"]; ?></td>
                                                            <td><?php if (empty($result_data["last_update"])) {
                                                                    echo "No update recently!";
                                                                } else {
                                                                    echo $result_data["last_update"];
                                                                } ?></td>
                                                            <td>
                                                                <div class="hstack gap-3 flex-wrap">
                                                                    <a data-bs-toggle="modal" data-bs-target=".article-view-modal" class="link-success fs-15 cursor-pointer-ad" onclick="project_view(<?php echo $result_data['id'] ?>);"><i class="ri-eye-fill"></i></a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".article-edit-modal" class="link-primary fs-15 cursor-pointer-ad" onclick="project_edit_view(<?php echo $result_data['id'] ?>);" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                                    <a class="link-danger fs-15 cursor-pointer-ad" onclick="project_delete(<?php echo $result_data['id']; ?>);"><i class="ri-delete-bin-line"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    <?php
                                                } else {
                                    ?>
                                        </tbody>
                                        </table>
                                        <div class="alert alert-warning mb-0 text-center" role="alert">
                                            No project added!
                                        </div>
                                    <?php
                                                }
                                    ?>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->


                <!-- Projects add modal -->
                <div class="modal fade article-add-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header modal-header-color">
                                <h5 class="modal-title text-white" id="myExtraLargeModalLabel">Create New Project
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <label for="article-title" class="form-label">Project Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="article-title" placeholder="Answer here...">
                                    </div>

                                    <div class="col-12 mt-4">
                                        <label for="article-des" class="form-label">Project Description</label>
                                        <div class="snow-editor2" style="height: 300px;" id="article-des">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="mb-0">
                                            <div class="input-group">
                                                <input type="file" multiple="multiple" class="form-control eme-input-field-upload" id="article-files">
                                                <label class="input-group-text amex-cursor-pointer" for="article-files">Upload</label>
                                            </div>
                                            <label for="article-files">Project images (jpg, jpeg, png, svg, tiff allowed) <br>
                                                <em class="image-label-em-color">25 images can be uploaded and the total size of all files is limited to 10MB !</em></label>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="article-title" class="form-label">Meta Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="meta-title" placeholder="Answer here...">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="article-title" class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="meta-keywords" placeholder="Answer here...">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label for="article-title" class="form-label">Meta Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="meta-des" cols="30" rows="3"></textarea>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                <button type="button" class="btn btn-primary" data-toast-article-add id="new_article_btn" onclick="save_project();">Save Project</button>
                                <button type="button" class="btn btn-primary btn-load d-none" id="new_article_load_btn" style="cursor: wait;">
                                    <span class="d-flex align-items-center">
                                        <span class="flex-grow-1 me-2">
                                            Processing...
                                        </span>
                                        <span class="spinner-grow flex-shrink-0" role="status">
                                            <span class="visually-hidden">Processing...</span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!-- article add modal -->

                <!-- article View Modal -->
                <div class="modal fade fadeInRight article-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl d-none" id="article-content">

                    </div>
                    <div class="modal-dialog modal-xl modal-load-height-100" id="article-content-load">
                        <div id="elmLoader">
                            <div class="spinner-border text-primary avatar-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- article View Modal -->

                <!-- article Edit Modal -->
                <div class="modal fade fadeInRight article-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl d-none" id="article-edit-content">

                    </div>
                    <div class="modal-dialog modal-xl modal-load-height-100" id="article-edit-content-load">
                        <div id="elmLoader">
                            <div class="spinner-border text-primary avatar-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- article Edit Modal -->

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

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- Function -->
    <script src="assets/js/function.js"></script>
    <!-- quill js -->
    <script src="assets/libs/quill/quill.min.js"></script>

    <script>
        var toolbarOptions = [
            [{
                'size': ['small', false, 'large', 'huge']
            }],
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],

            [{
                'header': 1
            }, {
                'header': 2
            }],
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            [{
                'script': 'sub'
            }, {
                'script': 'super'
            }],
            [{
                'indent': '-1'
            }, {
                'indent': '+1'
            }],
            [{
                'direction': 'rtl'
            }],

            ['link', 'formula'],
            [{
                'color': []
            }, {
                'background': []
            }],
            [{
                'font': []
            }],
            [{
                'align': []
            }],

            ['clean']
        ];
        var quill = new Quill('.snow-editor2', {
            modules: {
                toolbar: toolbarOptions
            },

            theme: 'snow'
        });
    </script>

    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@4/bootstrap-4.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>