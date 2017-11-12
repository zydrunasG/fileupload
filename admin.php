<?php
$title = "Delete user";
require_once('includes/config.php');

require('layout/header.php');

if( $user->is_logged_in() && $_SESSION['username'] != 'admin'){
    header('Location: index.php');
    exit();
}
elseif (!$user->is_logged_in()){
    header('Location: login.php');
    exit();
}

$error[] = "";
if(isset($_POST['submit'])){
    if (empty($_POST['memberID'])) $error[] = "Please fill out user ID";
    if (empty($_POST['username'])) $error[] = "Please fill out username";

    try{
        $stmt = $db->prepare('DELETE FROM files WHERE memberID=:memberID');
        $stmt->execute(array(
            ':memberID' => $_POST['memberID']
        ));

        $stmt2 = $db->prepare('DELETE FROM members WHERE memberID=:memberID AND username=:username');
        $stmt2->execute(array(
            ':memberID' => $_POST['memberID'],
            ':username' => $_POST['username']
        ));
    }
    catch (PDOException $exc){
        $error[] =  $exc->getMessage();
    }

}


?>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="page-header">Delete user with all user data</h1>

            <form role="form" method="post" action="" autocomplete="off">
                <h2>Select user to take actions:</h2>


                <?php
                //check for any errors
                if(isset($error)){
                    foreach($error as $e){
                        echo '<p class="bg-danger">'.$e.'</p>';
                    }
                }
                ?>

                <div class="form-group">
                    <input type="text" name="memberID" id="memberID" class="form-control input-lg" placeholder="User ID" value="" tabindex="1">
                    <br>
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" value="" tabindex="1">

                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="Delete" class="btn btn-primary btn-block btn-lg">
                </div>

            </form>
        </div>
    </div>
</div>








<?php
//include header template
require('layout/footer.php');
?>

