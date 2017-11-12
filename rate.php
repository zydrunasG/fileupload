<?php
    require_once 'includes/config.php';


    if(isset($_GET['filename'], $_GET['rating'])){
        $filename = $_GET['filename'];
        $rating = $_GET['rating'];

        if(in_array($rating, [1, 2, 3, 4, 5])){
            try{
                $stmt = $db->prepare('SELECT fileID FROM `files` WHERE isPrivate=0 AND filename=:filename');
                $stmt->execute(array(':filename' => $filename));
                $fileID = $stmt->fetch();


                $stmt2 = $db->prepare('INSERT INTO ratings (fileID, stars) VALUES (:fileID, :stars)');
                $stmt2->execute(array(
                    ':fileID' => $fileID[0],
                    ':stars' => $rating
                ));

            }
            catch (PDOException $exc){
                echo $exc->getMessage();
            }

        }
        header('Location: publicfiles.php');
        exit();
    }

?>