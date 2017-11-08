<?php
$file_name = $_GET['filename'];

    if($_GET['private']== 0)
    {
        $file_url = 'files/public/' . $file_name;
        getFile($file_url, $file_name);
    }
    else if ($_GET['private']== 1)
    {
        $file_url = 'files/private/'.$_SESSION['memberID'].'/'. $file_name;
        getFile($file_url, $file_name);
    }


function getFile($file_url, $file_name){

    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"".$file_name."\"");
    readfile($file_url);
    exit;


}


?>