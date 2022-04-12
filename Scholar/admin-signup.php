<?php session_start(); ?>

<?php


    $connection = mysqli_connect('localhost', 'root', '', 'scholar');
    
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        if(strlen($phone) != 10) {
            echo "<script type='text/javascript'>";
            echo "alert('Invalid Phone Number')";
            echo "</script>"; 
        }
            
        else {
            $query = "INSERT INTO admins values (NULL, '$name', '$email', '$phone', '$password')";

            mysqli_query($connection, $query);

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin-signup.css">
    <title>SignUp | Scholar</title>
</head>
<body>
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
      <h3>Scholar</h3>
  </div>
</nav>

<div class="alert alert-warning alert-dismissible fade show">
<b> Remember! </b> <p>This admin signup page must not be shared with non-admin users.</p>
</div>

<div class="container form max-width" >
    
    <form action="admin-signup.php" method="post">
        <img src="images/user.jpg" alt="">
        <p>Create a new <b> ADMIN </b> account!</p>
        <input type="text" placeholder="Enter Name" name="name" name="passwordrepeat">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="text" placeholder="Enter Phone Number" name="phone">
        <input type="password" placeholder="Enter Password" name="password">
        <input type="submit" class="btn btn-warning" value="SignUp" name="submit">

    </form>
</div>

<div class="container forms" >
 <h3>What can admin do?</h3>
 <ol>
     <li>Admins can add, delete or modify the Institution Details.</li>
     <li>Admin can make mentors and can remove them as well.</li>
     <li>Admin can manage (delete or update) posts made by others.</li>
     <li>Admin can add, delete or modify comments.</li>
     <li>Admin can post opportunities.</li>
     <li>Admin can issue notices.</li>
 </ol>

 <div class="alert alert-info alert-dismissible fade show">
Admins have <img src="images/admin-mark.png" alt="admin_mark" id="admin-mark"> in front of their names.</p>
</div>

<div class="alert alert-success alert-dismissible fade show">
 Mentors have <img src="images/mentor-mark.png" alt="admin_mark" id="admin-mark"> in front of their names.</p>
</div>

 
</div>
</body>
</html>