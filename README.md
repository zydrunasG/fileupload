# fileupload
File upload website

Project requirements:
1) database and server, i use xampp server
	1.1) create database
	1.2) import fileupload.sql file  to created database
2) Configure includes/config.php
3) Create and configure includes/mailsettings.php
	<?php
	//Server settings
	$mail->SMTPDebug = 2;                                 // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'sample@gmail.com';                 // SMTP username
	$mail->Password = '123456789';                        // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to


	$mail->setFrom('sample@gmail.com', 'FileUpload');

	?>
	
	
4) Don't forget to create files/public and files/private folders
5) Add .htaccess to files folder with:  deny from all
