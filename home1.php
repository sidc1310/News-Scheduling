<?php

require('connect.php');
require('functions.php');

?>
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


<div class="w3-bar w3-black w3-hide-small navbar-fixed-top">
  
  <?php
  require('navbar.php');
//  require('functions.php');
  
  ?>


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
    <div class="w3-display-middle w3-padding-large">
      <h1 class="w3-text-white"><center>  Love Reading News Paper ? </center></h1>
      <h1 class="w3-text-white"><center>Then</center></h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b><center>Order Now</center></b></h1>

     
    </div>
  </header>

  <!-- Grid    -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          
          <h5> <span class="w3-opacity">
          	
          </span></h5>
        </div>

        <div class="w3-justify">
          <img src="x5.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><h2>Hello,</h2> </p>
          <p><h4>Yes,</h4>There solution to your daily problem.<br>
          No need to go out to buy newspaper. No need to read the same paper whole month.<br>

           <h3>Now you are just one click away from your favourite newspaper. Any palce , any day, ,any time, any newspaper  ....!!!</h3>


           <br>
           <h5>
           There is nothing more valuable than knowledge, so why not to gain more knowledge from different newspapers of different regions and different languages.</h5>

           <h2>So,Don't wait anymore. Order Now !!!</h2>
</p>
          
          
          
        </div>
      </div>
    </div>
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="x6.jpg" alt="Jane" style="width:100%" class="grayscale" >
        <div class="w3-container w3-black">
          <h4>Happy Customers</h4>
          <p>Order at just one click, early morning delievery of newspapers, different offers for regular customers, and many more things !!!</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
     
      <hr>

      <!-- Advertising -->
      
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

      
    </div>
  </div>
</div>


<div id="subscribe1" class="w3-modal w3-animate-opacity">
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
                <label for="user">USER1:</label>
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
