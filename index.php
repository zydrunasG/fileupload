<?php
$title = "File Upload";
require_once('includes/config.php');

require('layout/header.php');

if ($user->is_logged_in()){
    include 'memberpage.php';
}
else {
    echo '<div class="container-fluid">';
    echo '<h1 class="page-header text-center">Welome to FileUpload,you are not logged in</h1>';
    echo '</div>';
}
?>

<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <img src="images/cloud-logo.png">
    </div>
</div>



<script>
    removeClass();
    document.getElementById("li-home").classList.add("active");
</script>

<?php
//include header template
require('layout/footer.php');
?>
