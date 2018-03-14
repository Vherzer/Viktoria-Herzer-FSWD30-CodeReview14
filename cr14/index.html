<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 // it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }
 $error = false;
 if( isset($_POST['btn-login']) ) {
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter a valid email address.";
  }
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  // if there's no error, continue to login
  if (!$error) {
   $password = hash('sha256', $pass); // password hashing using SHA256
   $res=mysqli_query($conn, "SELECT user_id, user_name, user_pass FROM user WHERE user_email='$email'");
   $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
   $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
   if( $count == 1 && $row['user_pass']==$password ) {
        $_SESSION['user'] = $row['user_id'];
        header("Location: home.php");
   } else {
    $errMSG = "Incorrect Credentials, please try again...";
   }
  }
 }
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Global event management company</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/stylesheet.css" rel="stylesheet">

  </head>

  <body>

 <div class="container">


      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
               <hr /><hr /> 
             <hr />
                         <?php
   if ( isset($errMSG) ) {
echo $errMSG; ?>
                <?php
                 }
                    ?>

              <input type="email" name="email" class="form-control" placeholder="Your Email"  maxlength="40" />
                          <span class="text-danger"></span>
<br />

             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />

            <span class="text-danger"><?php echo $passError; ?></span>
             <hr />
             <button class="btn" type="submit" name="btn-login">Log in</button>

             <hr />
             <a href="register.php">Register Here</a>


    </form>
      </div>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #FFC679;">
      <div class="container" style="background-color: #FFC679;">
        <a class="navbar-brand" style="background-color: #FFC679; color: black;" href="#">Global event management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-color: #FFC679;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="background-color: #FFC679;">
          <ul class="navbar-nav ml-auto" style="background-color: #FFC679; color: black">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="background-color: #FFC679; color: black" >Home
                <span class="sr-only" style="background-color: #FFC679;">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Please login or register to access our Events Pages, there is a lot waiting for you...
      </h1>

      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/vienna.jpg" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Travel Information</h3>
          <p>Tourist-Info Vienna</p>
<p>Albertinaplatz/Maysedergasse</p>
<p>1010 Vienna</p>
<p>Daily from 9.00 am - 7.00 pm</p>
<p>Tourist Info Vienna Airport
in the arrival hall</p>
<p>Daily from 7.00 am - 10.00 pm</p>
<p>Tourist Info Vienna Main Station
in the InfoPoint of ÖBB</p>
<p>Daily from 9.00 am - 7.00 pm</p>
<p>Vienna Hotels & Info</p>
<p>Tel. +43-1-24 555</p>
<p>Fax +43-1-24 555-666</p>
<p>Monday - Friday, 9.00 am - 7.00 pm</p>
<p>E-Mail: info@wien.info</p>
          <a class="btn btn-primary" href="#" style="background-color: #FFC679; color: black">Login above</a>
        </div>
      </div>
      <!-- /.row -->
      

      <hr>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Viktoria Herzer 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php ob_end_flush(); ?>
