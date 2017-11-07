<?php
$title = "Eshop main page";
require_once('includes/config.php');

require('layout/header.php');

$dir = 'files/public/';
$files1 = scandir($dir,1);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header">Public files</h1>
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th>Number</th>
                        <th>File</th>
                    </tr>
                </thread>
                <tbody>
                <?php
                $count= 1;
                    foreach ($files1 as $file)
                    {
                        echo '<tr>';
                        echo '<td> '.$count.' </td>';
                        echo '<td> '.$file.' </td>';
                        echo '</tr>';
                    $count++;
                    }
                ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<script>

</script>

<?php
//include header template
require('layout/footer.php');
?>


