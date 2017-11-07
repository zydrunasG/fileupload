<?php
ob_start();
session_start();

// set timezone
date_default_timezone_set('Europe/Vilnius');

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'eshop');

// application address
define('DIR','localhost/eshop/');

try{
    $db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER,DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}


include('classes/user.php');
$user = new User($db);
?>