<?php session_start(); ?>

<?php
error_reporting(0);
$connection = mysqli_connect('localhost', 'root', '', 'scholar');

$id = $_GET['id'];
$Name = $_GET['nm'];




if($_SESSION['name']==$Name) {
$Delete = "DELETE FROM posts WHERE id = '$id'";

$query = mysqli_query($connection, $Delete);
    if($query) {
    header('location:user-home.php');
    }
}

else {
        echo '<script type="text/javascript">';
        echo 'alert("You can only delete the posts made my you!")';
        echo '</script>';
        
}




?>