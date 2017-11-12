<?php
$title = "Public files";
require_once('includes/config.php');

require('layout/header.php');

$dir = 'files/public/';
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="page-header">Public files</h1>
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th>File</th>
                        <th>Uploaded by</th>
                        <th>Date</th>
                        <th>Rate it</th>
                        <th>Rate</th>
                    </tr>
                </thread>
                <tbody>
                <?php

            //    $stmt = $db->prepare('SELECT * FROM `files` INNER JOIN members ON files.memberID=members.memberID WHERE isPrivate=0 ORDER BY  `date` DESC  ');
                $stmt = $db->prepare('SELECT *, AVG(stars) FROM `files` 
                INNER JOIN members ON files.memberID=members.memberID 
                INNER JOIN ratings ON files.fileID=ratings.fileID
                GROUP BY files.fileID
                ORDER BY date DESC');
                $stmt->execute();
                $result = $stmt->fetchAll();

        /*        $stmt2 = $db->prepare('SELECT fileID, AVG(stars) FROM `ratings` GROUP BY fileID');
                $stmt2->execute();
                $result2 = $stmt2->fetchAll();

                foreach ($result2 as $r2){
                    $ratings = array('fileID' => $r2['fileID'], 'rating' => $r2['AVG(stars']);
                }
*/
                $count= 1;
                    foreach ($result as $r)
                    {



                            echo '<tr>';

                            echo '<td><a href="download.php?filename='.$r['filename'].'&private=0">'.$r["filename"].'</a></td>';

                            echo '<td> '.$r['username'].' </td>';
                            echo '<td> '.$r['date'].' </td>';
                            echo '<td>';
                            echo '<a href="rate.php?filename='.$r['filename'].'&rating=1">1 </a>';
                            echo '<a href="rate.php?filename='.$r['filename'].'&rating=2">2 </a>';
                            echo '<a href="rate.php?filename='.$r['filename'].'&rating=3">3 </a>';
                            echo '<a href="rate.php?filename='.$r['filename'].'&rating=4">4 </a>';
                            echo '<a href="rate.php?filename='.$r['filename'].'&rating=5">5 </a>';

                            echo '</td>';
                            echo '<td>'.$r['AVG(stars)'].'</td>';




                            $count++;



                    }
                ?>
                            <td>


                            </td>



                <?php
                         echo '</tr>';

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


