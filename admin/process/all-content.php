<?php
session_start();
include 'connection.php';

if (isset($_POST["Check-request"]) && isset($_SESSION["sa21-user"])) {
    $Check_request = $_POST["Check-request"];

    if ($Check_request == "project") {
        $id = $_POST["id"];

        $result_set = Database::search("SELECT * FROM `project` WHERE `id`='" . $id . "'");
        $result_count =  $result_set->num_rows;

        if ($result_count > 0) {
            $result_data = $result_set->fetch_assoc();
            ?>
            <div class="modal-content">
                <div class="modal-header modal-header-color">
                    <h5 class="modal-title text-white" id="myExtraLargeModalLabel">Project Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="row">

                                <?php
                                $result_set_doc = Database::search("SELECT * FROM `project_images` WHERE `project_id`='" . $id . "'");
                                $row_count_doc = $result_set_doc->num_rows;

                                if ($row_count_doc > 0) {

                                    for ($i = 0; $i < $row_count_doc; $i++) {
                                        $result_data_doc = $result_set_doc->fetch_assoc();
                                    ?>
                                        <div class="col-12 col-md-6 col-lg-4 mt-2">
                                            <div class="event-img-bg-css" style="background-image: url(../<?php echo $result_data_doc["code"]; ?>);"></div>
                                            <button class="btn btn-danger img-delete-btn-width" id="article-img-delete" onclick="project_image_delete(<?php echo $result_data_doc['id']; ?>);">Delete</button>

                                            <button type="button" class="btn btn-danger btn-load d-none" id="article-img-delete-load_btn" style="cursor: wait;">
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
                                <?php
                                    }
                                }

                                ?>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-muted">

                                        <div class="pt-2 mb-4">
                                            <div class="row">

                                                <div class="col-lg-6 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Add On :</p>
                                                        <h5 class="fs-14 mb-0"><?php echo $result_data["add_on"]; ?></h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div>
                                                        <p class="mb-2 text-uppercase fw-medium">Last Update On :</p>
                                                        <h5 class="fs-14 mb-0"><?php if (empty($result_data["last_update"])) {
                                                                                    echo "No update recently!";
                                                                                } else {
                                                                                    echo $result_data["last_update"];
                                                                                } ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="mb-3 text-uppercase border-top border-top-dashed pt-4"><?php echo $result_data["title"]; ?></h6>

                                        <?php if ($result_data["description"] != "<p><br></p>") {
                                        ?>
                                        <?php echo $result_data["description"];
                                        } ?>

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                </div>
            </div><!-- /.modal-content -->
        <?php
        }
    } else  if ($Check_request == "project-edit") {
        $id = $_POST["id"];

        $result_set = Database::search("SELECT * FROM `project` WHERE `id`='" . $id . "'");
        $result_count =  $result_set->num_rows;

        if ($result_count > 0) {
            $result_data = $result_set->fetch_assoc();

            $result_set_doc = Database::search("SELECT * FROM `project_images` WHERE `project_id`='" . $id . "'");
            $row_count_doc = $result_set_doc->num_rows;


        ?>
            <div class="modal-content">
                <div class="modal-header modal-header-color">
                    <h5 class="modal-title text-white" id="myExtraLargeModalLabel">Edit Project
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <label for="article-title-u" class="form-label">Project Title</label>
                            <input type="text" class="form-control" id="article-title-u" placeholder="Answer here..." value="<?php echo $result_data["title"]; ?>">
                        </div>

                        <div class="col-12 mt-4">
                            <label for="article-des-u" class="form-label">Project Description</label>
                            <div class="snow-editor-u" style="height: 300px;" id="article-des-u">
                                <?php if ($result_data["description"] != "<p><br></p>") {
                                ?>
                                <?php echo $result_data["description"];
                                } ?>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div class="mb-0">
                                <div class="input-group">
                                    <input type="file" multiple="multiple" class="form-control eme-input-field-upload" id="article-files-u">
                                    <label class="input-group-text amex-cursor-pointer" for="article-files-u">Upload</label>
                                </div>
                                <label for="article-files">Article images (jpg, jpeg, png, svg, tiff allowed) <br>
                                    <em class="image-label-em-color"><?php echo 25 - $row_count_doc ?> images can be uploaded and the total size of all files is limited to 10MB !</em></label>
                            </div>
                        </div>
                     
                        <!-- [Rest of your form fields remain the same] -->

                        <div class="col-12 mt-3">
                            <label for="meta-title-u" class="form-label">Meta Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="meta-title-u" placeholder="Answer here..." value="<?php echo $result_data["meta_title"]; ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="meta-keywords-u" class="form-label">Meta Keywords <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="meta-keywords-u" placeholder="Answer here..." value="<?php echo $result_data["meta_keywords"]; ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="meta-des-u" class="form-label">Meta Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="meta-des-u" cols="30" rows="3"><?php echo $result_data["meta_des"]; ?></textarea>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                    <button type="button" class="btn btn-primary" id="new_article_btn-u" onclick="update_project(<?php echo $result_data['id']; ?>);">Update Project</button>
                    <button type="button" class="btn btn-primary btn-load d-none" id="new_article_load_btn-u" style="cursor: wait;">
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
        <?php
        }
    }
}
