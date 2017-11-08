<?php
$title = "Public files";
require_once('includes/config.php');

require('layout/header.php');

$dir = 'files/private/'.$_SESSION['memberID'].'/';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header">Your private files</h1>
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th>File</th>
                        <th>Date</th>
                    </tr>
                </thread>
                <tbody>
                <?php

                $stmt = $db->prepare('SELECT * FROM `files` INNER JOIN members ON files.memberID=members.memberID WHERE isPrivate=1 AND members.memberID=:memberID ORDER BY  `date` DESC ');
                $stmt->execute(array(
                        ':memberID' => $_SESSION['memberID'],
                ));
                $result = $stmt->fetchAll();




                $count= 1;
                foreach ($result as $r)
                {

                        echo '<tr>';

                        echo '<td><a href="download.php?filename='.$r['filename'] .'">'.$r["filename"].'</a></td>';
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
    document.getElementById("li-privatefiles").classList.add("active");
</script>


<?php
//include header template
require('layout/footer.php');
?>


