<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>


<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/fileupload/index.php">FileUpload</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/fileupload/index.php">Home</a></li>

                <?php
                if( $user->is_logged_in())
                {
                    echo '<li><a href="#about">Files</a></li>';
                    echo '<li><a href="#contact">Upload</a></li>';
                    echo '<li><a href="profile.php">' .$_SESSION['username'].'</a></li>';
                    echo '<li><a href=\'logout.php\'>Logout</a></li>';
                }
                else {
                    echo '<li><a href="login.php">Login</a></li>';
                    echo '<li><a href="register.php">Register</a></li>';
                }
                ?>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>