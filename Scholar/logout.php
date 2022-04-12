<?php session_start(); ?>

<?php $destroy = session_destroy(); 
if($destroy) {
    header("location: user-login.php");
}

?>
