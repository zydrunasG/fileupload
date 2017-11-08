<?php
$title = "Upload file";
require_once('includes/config.php');

require('layout/header.php');




?>
<!-- Html goes here -->




    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="page-header text-center">File Upload</h1>
                <?php

                if(isset($_GET['action'])){

                    //check the action
                    if ($_GET['action'] == 'uploaded') {
                        echo "<h2 class='bg-success text-center'>The file has been uploaded</h2>";

                    }
                    if ($_GET['action'] == 'error'){
                        echo "<h2 class='bg-danger text-center'>The file has not been uploaded</h2>";
                    }

                }

                ?>

                <h3 class="text-center">Please select file to upload</h3>
                <form method="post" action="upload.php" autocomplete="off" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="fileinput input-group fileinput-new" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput">
                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                <span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn btn-default btn-file">
                                <span class="fileinput-new">Select file</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="hidden" value="" name=""><input type="file" name="fileToUpload" id="fileToUpload""></span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                        <div class="form-group text-center">
                            <h3 class="modal-header">File is:</h3>
                            <label class="radio-inline"><input type="radio" name="file">Public</label>
                            <label class="radio-inline"><input type="radio" name="file">Private</label>
                        </div>
                        <div class="form-group text-center">
                            <div class="modal-header">
                            <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <h2>Allowed types: .jpg .jpeg .png .gif .rar .zip</h2>
                        </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>


<script>
    removeClass();
    document.getElementById("li-file").classList.add("active");
</script>

<?php
//include header template
require('layout/footer.php');
?>

