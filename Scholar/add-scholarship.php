<?php session_start()?>

<?php 

  $connection = mysqli_connect('localhost', 'root', '', 'scholar');

  $query = "SELECT * FROM users WHERE Type = 'Mentor'";

  $runquery = mysqli_query($connection, $query);

  if(isset($_POST['submit'])) {

        $scheme_name = $_POST['scheme_name'];
        $scheme_type = $_POST['scheme_type'];
        $eligibility = $_POST['eligibility'];
        $amount = $_POST['amount'];
        $provider = $_POST['provider'];
        $link = $_POST['link'];

        $queryy = "INSERT INTO scholarships values(null, '$scheme_name', '$scheme_type', '$eligibility', $amount, '$provider', '$link')";

        $runquery = mysqli_query($connection, $queryy);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/user-home.css">
    <link rel="stylesheet" href="css/chatbot.css">

    <title>Home | Scholar</title>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
      <h3>Educa<span "admin">Pedia</span></h3>
  </div>

  <!-- Button to open the offcanvas sidebar -->
<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
<img src="images/ham.jpg" alt="ham-burg" id="ham">
</button>
</nav>


<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
      <center><img src="images/user.png" alt="profile" style="height: 50px;"></center>
    <h1 class="offcanvas-title"><?php echo $_SESSION['name'] ?></h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Institute: <?php echo $_SESSION['Institute']; ?></p>
    <p>Age: <?php echo $_SESSION['Age']; ?></p>
    <a href="logout.php"><button class="btn btn-warning">Logout</button></a>
    <a href="see-mentors.php"><button class="btn btn-warning">See Mentors</button></a>
  </div>
</div>

<!--Offcanvas Chat Bar-->
<div class="offcanvas offcanvas-start" id="demos">
  <div class="offcanvas-header">
      <img src="images/megha.png" id="megha">
    <h1 class="offcanvas-title">Hi! I am Megha.</h1>
    <p>How may I help you today?</p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="wrapper">
        <div class="title">Ask Megha!</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'msg.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"> <img src="images/megha.png" style="height:20px;"> </div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
</div>


<!--------Home----------------->

<div class="full">

<!--Left-->

    <div class="left">
        <center>
        <img src="images/oppor.png" id="oppor" style="height: 40px; margin-top: 10px;">
        <h4 style=" margin-bottom: 40px;">Admin Panel</h4></center>
        <button type="button" class="btn btn-warning">Scholarships</button>
        <button type="button" class="btn btn-warning">Manage Users </button>
        <button type="button" class="btn btn-warning">Issue Notice</button>
        <button type="button" class="btn btn-warning">Jobs</button>
        <button type="button" class="btn btn-warning">Internships</button>
        
      </div>
<!--Middle--->    
<div class="middle">
        <div class="add-scholarship-heading" style="margin-left:50px; margin-top: 10px;"> 

            <h4>Add New Scholarship!</h4>

        </div>
        <div >
        <form class="buttons-for-form" action="add-scholarship.php" method="post">
            <input  type="text" placeholder="Enter the name of the scheme..." name="scheme_name"> <br>
            <input type="text" placeholder="Enter the type of the scheme..." name="scheme_type"> <br>
            <input type="text" placeholder="Enter the Eligibility Creteria..." name="eligibility"> <br>
            <input type="text" placeholder="Enter the Amount..." name="amount"> <br>
            <input type="text" placeholder="Enter the name of the provider..." name="provider"> <br>
            <input type="text" placeholder="Enter the link..." name="link"> <br>
            <button class="btn btn-warning" name="submit">Update Scholarship</button>
        </form>
    </div>

</div>

    </div>


</body>

</html>