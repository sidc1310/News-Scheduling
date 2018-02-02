<?php 
require('connect.php');
session_start();
/*if(loggedin()){
  header('LOCATION:welcome.php');
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
  <title>News Scheduling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


<style> 

  </style>

  </head>
  
  <body>
  

  <center><h1 align="left" ><font color="black" size="15">  News Scheduling</font></h1></center>
  <nav class="navbar navbar-inverse" role="navigation">
  
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">News Scheduling</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="home.php"> Home   <span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="login.php">Login  <span class="glyphicon glyphicon-user"></span></a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us <span class="glyphicon glyphicon-earphone"></span></a></li>
      <li><a href="signup.php">Sign Up  <span class="glyphicon glyphicon-user"></span></a></li>

      
    </ul>
  </div>
</nav>




<form action="login.php" method="post" role="form">
<div class="row">
  <div class="col-sm-5">
    <div class="modal-body">
    
        <br>             
              <div class="Panel with panel-danger class">
                  <div class="panel-heading">
                
                <label><input type="checkbox" value=""> Lokmat</label>

                <label for="copies1">Copies</label>
                <input type="text" placeholder="Enter number of copies Here.." name="copies1"  class="form-control">

                <br><br>
                <label><input type="checkbox" value="">Times Of India</label>
                <br>
                <label for="copies2">Copies</label>
                <br><br>
                <input type="text" placeholder="Enter number of copies Here.." name="copies2"  class="form-control">
                <br>
                <label><input type="checkbox" value="">Sakal</label>
                <br><br>
                <label for="copies3">Copies</label>
                <input type="text" placeholder="Enter number of copies Here.." name="copies3"  class="form-control">
                               
                  <br>
                  
                    
              </div> 
              </div>
            </div>
        </div>
        <div class="col-sm-7">

        <img class="img-responsive" src="x1.png"  width="1000" height="500"> 


        </div>

        </div>
        <br><br>
        <div class="row">
              <br>

              <div class="col-sm-3 form-group">

                

                <div class="col-xs-8 col-sm-8 col-md-8">
                        <input type="submit" name="SUBMIT_MESSAGE" value="Order" class="btn btn-lg btn-success btn-block">

              </div>
              </div>

              <div class="col-sm-2 form-group">
                <div class="col-xs-8 col-sm-8 col-md-8">
                        
                        <a href="signup.php" class="btn btn-lg btn-danger btn-block">Sign Up</a>
                        </div>

              </div>

              <div class="col-sm-7 form-group">
              </div>
              
        </div>

              


          

    </form>

  

















</body>
</html>
