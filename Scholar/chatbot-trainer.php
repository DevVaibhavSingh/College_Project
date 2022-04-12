<?php

$connection = mysqli_connect('localhost', 'root', '', 'scholar');

if(isset($_POST['submit'])) {

  $queries = $_POST['queries'];
  $replies = $_POST['replies'];


  $query = "INSERT INTO chatbot values(null, '$queries', '$replies')";

  $queryrun = mysqli_query($connection, $query);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/user-home.css">
    <link rel="stylesheet" href="css/chatbot.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/chatbot-trainer.css">

    <title>Chatbot Trainer | Scholar</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
      <h3>Scholar <span class="admin"> Admin </span></h3>
  </div>

  <!-- Button to open the offcanvas sidebar -->
<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
<img src="images/ham.jpg" alt="ham-burg" id="ham">
</button>
</nav>


<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Heading</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <button class="btn btn-secondary" type="button">A Button</button>
  </div>
</div>

<!--------Chatbot Trainer Home------>
<div class="megha">
<button type="button" id="new" data-bs-toggle="modal" data-bs-target="#myModal"><img src="images/megha.png" style="height:80px; margin-top:20px; margin-left:20px;"></button> Hi Trainer....<br> <p style="margin-left:30px;">I'm excited to learn new things.</p>
</div>
<div class="forms">
  <form action="chatbot-trainer.php" method="post">
    <input type="text" placeholder="Enter Query..." name="queries"><br>
    <input type="text" placeholder="Enter Reply..." name="replies"><br>
     <input type="submit" class="btn btn-warning xyz" value="Train" name="submit">
  </form>
</div>

<!---Yes--->
<!-- Button to Open the Modal -->

  


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enter queries and their replies. Click on Train and I have learnt them.</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="content">
        <p>I learn everyday and I'm getting better with each passing day. The more you will train me, the more I will be able to help others.</p>
      </div>



</body>
</html>