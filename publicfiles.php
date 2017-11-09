<?php
$title = "Public files";
require_once('includes/config.php');

require('layout/header.php');

$dir = 'files/public/';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header">Public files</h1>
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th>File</th>
                        <th>Uploaded by</th>
                        <th>Date</th>
                    </tr>
                </thread>
                <tbody>
                <?php

                $stmt = $db->prepare('SELECT * FROM `files` INNER JOIN members ON files.memberID=members.memberID WHERE isPrivate=0 ORDER BY  `date` DESC  ');
                $stmt->execute();
                $result = $stmt->fetchAll();




                $count= 1;
                    foreach ($result as $r)
                    {

                            echo '<tr>';

                            echo '<td><a href="download.php?filename='.$r['filename'].'&private=0">'.$r["filename"].'</a></td>';
                            echo '<td> '.$r['username'].' </td>';
                            echo '<td> '.$r['date'].' </td>';


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
    removeClass();
    document.getElementById("li-publicfiles").classList.add("active");
</script>


<?php
//include header template
require('layout/footer.php');
?>


