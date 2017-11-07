<?php
$title = "Eshop main page";
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





<script>
    removeClass();
</script>

<?php
//include header template
require('layout/footer.php');
?>
