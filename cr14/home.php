<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
  // select logged-in users detail
 $res = mysqli_query($conn, "SELECT * FROM user WHERE user_id=".$_SESSION['user']);
 $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['user_name']; ?></title>
<style type="text/css">
      
        table {
            width: 100%;
            margin-top: 20px;
        }
    </style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #FFC679;">
      <div class="container" style="background-color: #FFC679;">
        <a class="navbar-brand" style="background-color: #FFC679; color: black;" href="#">Global event management</a>
      </div>
      <div  id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li >
              <a class="nav-link" href="#" style="padding: 20px;">All Events </a> 
            </li>
            <li >
              <a class="nav-link" href="#" style="padding: 20px;">Services</a>
            </li>
            <li >
              <a class="nav-link" href="#" style="padding: 20px;">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
 <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img style="height: 250px; padding-left: 250px;"class="px-3 card-img" src="img/vienna.jpg" alt="auto">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Overview</h3>
          <p>Looking for something to do in Wien? Whether you're a local, new in town or just cruising through we've got loads of great tips and events. You can explore by location, what's popular, our top picks, free stuff... you got this. Ready?</p>
        </div>
      </div>
      <!-- /.row -->

      <hr>
      <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://findmygametoday.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a style="padding-left: 70px;"href="create.php"><button type="button">Add Event</button></a>
      <?php
 $sql = "SELECT event_name, event_date, event_type, event_description FROM events ";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            echo "<div class='abs container'>
        <table class='table'>
          <tr>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Genre</th>
            <th>Short Description</th>
          </tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                  <td>" . $row["event_name"] . "</td>
                  <td>" . $row["event_date"] . "</td>
                  <td>" . $row["event_type"] . "</td>
                  <td>" . $row["event_description"]."</td>
                  <td>

                     <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                     <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>

                    </td>
                </tr>";
            }
            echo "</table></div>";
        } else {
            echo "0 results";
        }


        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "cr14_Viktoria_Herzer_bigevents";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_close($conn);
        ?>

        <div class="container">
    <?php echo "Welcome, " . $userRow['user_name']; ?>
    <br>
    <br>

              <a  href="logout.php?logout">Sign Out</a>
            </div>
  
</body>
</html>
<?php ob_end_flush(); ?>