<!--
 * File Name: index.htm
 * 
 * Description:
 * This is the main entry point of the application. It initializes the application
 
 * @package 
 * @authors Jack Nealon (jnealon0805@gmail.com)
 * @license 
 * @version 1.0.0
 * @link 
 * @since 
 * 
 * Usage:
 * This file should be placed in the root directory of the application. It can be directly
 * accessed via the URL [Your Application's URL]. No modifications are necessary for basic
 * operation, but customization can be done by editing the configuration settings within.
 * 
 * Modifications:
 * [Date] - [Your Name] - Version [New Version Number] - [Description of Changes]
 * 
 * Notes:
 * - Additional notes or special instructions can be added here.
 * - Remember to update the version number and modification log with each change.
 * 
 * TODO:
 * - List any pending tasks or improvements that are planned for future updates.
 * 
 -->

  <?php
    /*
    session_start();
    // connection params
    $config = parse_ini_file("./config.ini");
    $server = $config["servername"];
    $username = $config["username"];
    $password = $config["password"];
    $database = "";

    // connect to db
    $cn = mysqli_connect($server , $username , $password , $database );

    // check connection
    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error ());
    }

    // set up the prepared statement
    $user = $_SESSION["session_user"];
    $q = "SELECT client FROM User WHERE user_name = '$user'";

    $st = $cn ->stmt_init ();
    $st ->prepare($q);

    // execute the statement and bind the result (to vars)
    $st ->execute ();
    $st ->bind_result($cl);

    $st->fetch();

    $CLIENT = $cl;

    // clean up
    $st ->close ();
    $cn ->close ();
    */
  ?>

<!DOCTYPE html>
<html>
<head>
<title>Saturn Travel Company</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/styling/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
</head>
<body class="light-grey">

<!-- Navigation Bar -->
<div class="bar white border-bottom xlarge">
  <a href="#" class="bar-item button text-red hover-red"><b><i class="fa fa-map-marker margin-right"></i>Saturn Travel Company</b></a>
  <a href="#" class="bar-item button right hover-red text-grey"><i class="fa fa-search"></i></a>
</div>

<!-- Header -->
<header class="display-container content hide-small" style="max-width:1500px">
  <img class="image" src="/resources/london2.jpg" alt="London" width="1500" height="700">
  <div class="display-middle" style="width:65%">
    <div class="bar black">
      <button class="bar-item button tablink" onclick="openLink(event, 'Flight');"><i class="fa-solid fa-shuttle-space margin-right"></i>Shuttles</button>
      <button class="bar-item button tablink" onclick="openLink(event, 'Hotel');"><i class="fa fa-globe margin-right"></i>Planetary Stations</button>
      <button class="bar-item button tablink" onclick="openLink(event, 'Car');"><i class="fa-solid fa-satellite margin-right"></i>Orbital Stations</button>
    </div>

    <!-- Tabs -->
    <div id="Flight" class="container white padding-16 myLink">
      <h3>Travel other worlds with us</h3>
      <div class="row-padding" style="margin:0 -16px;">
        <div class="half">
          <label>From</label>
          <input class="input border" type="text" placeholder="Departing from">
        </div>
        <div class="half">
          <label>To</label>
          <input class="input border" type="text" placeholder="Arriving at">
        </div>
      </div>
      <p><button class="button dark-grey">Search and find launches</button></p>
    </div>

    <div id="Hotel" class="container white padding-16 myLink">
      <h3>Find the best places to stay</h3>
      <p>Book a room with us and get the best fares and promotions.</p>
      <p>We know hotels - we know comfort.</p>
      <p><button class="button dark-grey">Search Hotels</button></p>
    </div>

    <div id="Car" class="container white padding-16 myLink">
      <h3>Best vehicle rentals among the worlds!</h3>
      <p><span class="tag deep-orange">DISCOUNT!</span> Special offer if you book today: 25% off anywhere with Spacespaceiluvspacelol</p>
      <input class="input border" type="text" placeholder="Pick-up point">
      <p><button class="button dark-grey">Search Availability</button></p>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="container margin-top">
    <h3>Good Offers Right Now</h3>
    <h6>Up to <strong>50%</strong> discount.</h6>
  </div>
  <div class="row-padding text-white large">
    <div class="half margin-bottom">
      <div class="display-container">
        <img src="/resources/cinqueterre.jpg" alt="Cinque Terre" style="width:100%">
        <span class="display-bottomleft padding">Cinque Terre</span>
      </div>
    </div>
    <div class="half">
      <div class="row-padding" style="margin:0 -16px">
        <div class="half margin-bottom">
          <div class="display-container">
            <img src="/resources/newyork2.jpg" alt="New York" style="width:100%">
            <span class="display-bottomleft padding">New York</span>
          </div>
        </div>
        <div class="half margin-bottom">
          <div class="display-container">
            <img src="/resources/sanfran.jpg" alt="San Francisco" style="width:100%">
            <span class="display-bottomleft padding">San Francisco</span>
          </div>
        </div>
      </div>
      <div class="row-padding" style="margin:0 -16px">
        <div class="half margin-bottom">
          <div class="display-container">
            <img src="/resources/pisa.jpg" alt="Pisa" style="width:100%">
            <span class="display-bottomleft padding">Pisa</span>
          </div>
        </div>
        <div class="half margin-bottom">
          <div class="display-container">
            <img src="/resources/paris.jpg" alt="Paris" style="width:100%">
            <span class="display-bottomleft padding">Paris</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  <div class="container">
    <h3>Explore Nature</h3>
    <p>Travel with us and see nature at its finest.</p>
  </div>
  <div class="row-padding">
    <div class="half margin-bottom">
      <img src="/resources/ocean2.jpg" alt="Norway" style="width:100%">
      <div class="container white">
        <h3>Europa, Moon of Jupiter</h3>
        <p class="opacity">Roundtrip from $79,000,000</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="button margin-bottom">Purchase Tickets</button>
      </div>
    </div>
    <div class="half margin-bottom">
      <img src="/resources/mountains2.jpg" alt="Austria" style="width:100%">
      <div class="container white">
        <h3>Pluto, Outer Solar System</h3>
        <p class="opacity">One-way from $99,000,000</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="button margin-bottom">Purchase Tickets</button>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="container">
    <div class="panel padding-16 black opacity card hover-opacity-off">
      <h2>Get the best offers first!</h2>
      <p>Join our newsletter.</p>
      <label>E-mail</label>
      <input class="input border" type="text" placeholder="Your Email address">
      <button type="button" class="button red margin-top">Subscribe</button>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="container">
    <h2>Contact</h2>
    <p>Let us book your next trip!</p>
    <i class="fa fa-map-marker" style="width:30px"></i> Narnia, US<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: jsmith@saturntravel.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="input padding-16 border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="input padding-16 border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="input padding-16 border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="button black padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="container center opacity margin-bottom">
  <h5>Find Us On</h5>
  <div class="xlarge padding-16">
    <i class="fa fa-facebook-official hover-opacity"></i>
    <i class="fa fa-instagram hover-opacity"></i>
    <i class="fa fa-snapchat hover-opacity"></i>
    <i class="fa fa-pinterest-p hover-opacity"></i>
    <i class="fa fa-twitter hover-opacity"></i>
    <i class="fa fa-linkedin hover-opacity"></i>
  </div>
  <p>Powered by <a href="#" target="_blank" class="hover-text-green">sadness</a></p>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
