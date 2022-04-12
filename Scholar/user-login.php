<?php session_start(); ?>
<?php

    $connection = mysqli_connect('localhost', 'root', '', 'scholar');
    
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    

        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "SELECT * FROM users WHERE Email = '$email'";
        
        $run_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($run_query)) {

        $db_email = $row['Email'];
        $db_password = $row['Password'];
        $db_name = $row['Name'];
        $db_type = $row['Type'];
        $db_institute = $row['Institute'];
        $db_age = $row['Age'];

    }

    if($email == $db_email && $password == $db_password) {

        $_SESSION['username'] = $db_email;
        $_SESSION['name'] = $db_name;
        $_SESSION['type'] = $db_type;
        $_SESSION['Institute'] = $db_institute;
        $_SESSION['Age'] = $db_age;
        header("location: user-home.php");
    }

    if($email == $db_email && $password == $db_password && $db_type=="Admin") {

        $_SESSION['username'] = $db_email;
        $_SESSION['name'] = $db_name;
        $_SESSION['type'] = $db_type;
        header("location: dashboard.php");
    }

    else {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Login")';
        echo '</script>';
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
    <title>LogIn | Scholar</title>
</head>
<body>
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
      <h3>Scholar</h3>
  </div>
</nav>

<div class="alert alert-warning alert-dismissible fade show">
<b> Note: </b></br> 
<p>The login Page is same for admins and users. Admins and users gets redirected to their default location after login. </p>
</div>

<div class="container form max-width" >
    
    <form action="user-login.php" method="post">
        <img src="images/user.png" alt="">
        <p>Login! or create a new account.</p>
        <input type="text" placeholder="Enter Name" name="email">
        <input type="password" placeholder="Enter Password" name="password">
        <input type="submit" class="btn btn-warning" value="LogIn" name="submit">
        <input type="submit" class="btn btn-warning" value="SignUp">


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