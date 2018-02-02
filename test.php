<!DOCTYPE html>
<html>
<head>
<title>News Scheduling</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}

.panel-danger {
     background-color: #FFFFFF !important;
}

</style>


</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-right active">Login <span class="glyphicon glyphicon-home"></span></a>
  <a href="order1.php" class="w3-bar-item w3-button w3-right active">Order <span class="glyphicon glyphicon-home"></span></a>
  <a href="template1.php" class="w3-bar-item w3-button w3-right active">Home <span class="glyphicon glyphicon-home"></span></a>
  
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>News Scheduling</b></h1>
    <h6>Welcome to the new world of news...</h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="x1.png" alt="Fashion Blog" width="1600" height="700">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Love Reading News Paper ?</h1>
      <h1 class="w3-text-white">Then</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Order Now</b></h1>
      <h3><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'" >Order</button></h3>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Who we are ?</h3>
          <h5> <span class="w3-opacity">
          	<?php

          	echo date("d-m-Y");
          	?>
          </span></h5>
        </div>

        <div class="w3-justify">
          <img src="jumbotron.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><strong>Hello,</strong> </p>
          <p>Yes,now there solution to your daily problem.<br>
          Now no need to go out to buy newspaper. No need to read the same paper whole month.<br>

           Now you are just one click away from your favourite newspapers. Any palce ,any day ,any newspaper , any time ....!!!
           <h2>So,why to wait ??</h2>
</p>
          
          
          
        </div>
      </div>
    </div>
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="p3.jpg" alt="Jane" style="width:100%" class="grayscale" >
        <div class="w3-container w3-black">
          <h4>Happy Customers</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
     
      <hr>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Advertise</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">Your AD Here</span>
          </div>
        </div>
      </div>
      <hr>

     
    </div>
  </div>
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-dark-grey">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>

      <div class="row">
              
            <div class="col-sm-4 form-group">
            </div>
            <!-- <div class="modal-body"> -->
              <div class="col-sm-4 form-group">

              <!-- <div class="Panel with panel-danger class">
                  <div class="panel-heading"> -->
                <label for="user">USER ID:</label>
                <input type="text" placeholder="Enter your id Here.."  name="user" class="form-control">

                <br>


                <label for="password">password</label>
                <input type="password" placeholder="Enter your password Here.." name="password"  class="form-control">
                  
                  <br>
                  <input type="radio" name="type" value="agent" checked> Agent<br>
                  <input type="radio" name="type" value="customer"> Customer<br>
                  <input type="radio" name="type" value="distributer"> Distributer<br>
                  <!-- </div> -->
                    <!-- <div class="dropdown">
                    <p>Select Account</p>
                     <select name="topology" name="person">
                          <option value="T1">Owner</option>
                          <option value="T2">Worker</option>
                          </select>
                  </div>-->
              <!-- </div> --> 
              </div>
            <!-- </div> -->

            <div class="col-sm-4 form-group">
            </div>
            

        </div>

      <!-- <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button> -->
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
      
          <h4>Follow Us</h4>
        
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <div class="w3-container w3-padding w3-black">
      <p>&copy; 2017 siddhantchigale9@gmail.com</p>
      </div>
</footer>

</body>
</html>
