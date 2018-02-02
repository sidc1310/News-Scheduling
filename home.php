<?php 
require('connect.php');
// if(loggedin()){
//   if($_SESSION['type']==1)
//   header('LOCATION:distributer.php');
//   if($_SESSION['type']==2)
//   header('LOCATION:agent.php');
//   if($_SESSION['type']==3)
//   header('LOCATION:customer.php');
// }

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
  


  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "Login Form",
            width: 600,
            height: 600
        });
        $("#btnShow").click(function () {
            $('#dialog').dialog('open');
        });
    });


    function validateForm() {
    var x = document.forms["myForm"]["user"].value;
    var y = document.forms["myForm"]["password"].value;
    if (x =="" || y=="") {
        alert("Name must be filled out");
        return false;
    }
}

$(document).ready(function(){
    $("button").click(function(){
        $("but").animate({left: '250px'});
    });
});
</script>
 

<style> 


#img1{
  padding :0cm;
}

#col{
  background-color: Yellow;
}



  li{
    text-align: right;
  }

  .thumbnail {
    position: relative;
}

.caption {
    position: absolute;
    top: 45%;
    left: 0;
    width: 100%;
}

#img2{
    background: url('antique.jpg') no-repeat center center fixed;
    background-size: cover;
    height: 400px;
    width: 1400px;
    padding: 71px 0 65px 0;
    position: relative;
}

</style>

  </head>
  
  <body>
  <!-- <a href="login.php" class="btn btn-success" id1="1" >Owner Login </a> -->


  <!--<center><h1 style="background-color:black;"><font color="white" size="15"> News Scheduling</font></h1></center>-->

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="padding: 0px margin:0px">
  <center><h1 align="left" ><font color="white" size="15">  News Scheduling</font></h1></center>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">News Scheduling</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="home.php"> Home   <span class="glyphicon glyphicon-home"></span></a></li>    
      <li><a href="login.php">Login  <span class="glyphicon glyphicon-user"></span></a></li>
      <li><a href="order.php">Order Now  <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      <li><a href="#">About Us</a></li>
      
      
      <li><a href="#">Contact Us <span class="glyphicon glyphicon-earphone"></span></a></li>

      <!-- <li><div id="flip">Click to Log In</div></li> -->
    </ul>
  </div>
   </nav>
   <input type="button" id="btnShow" value="Show Popup" align = "right"/>
<div id="dialog" style="display: none" align = "left">
  <form action="login.php" method="post" onsubmit="return validateForm()" role="form" name="myForm">
        <br><br><br><br>
        <div class="container">
        <div class="row">
              

            <div class="modal-body">
              <div class="col-sm-4 form-group">

              <div class="Panel with panel-danger class">
                  <div class="panel-heading">
                <label for="user">USER ID:</label>
                <input type="text" placeholder="Enter your id Here.."  name="user" class="form-control">

                <br>


                <label for="password">password</label>
                <input type="password" placeholder="Enter your password Here.." name="password"  class="form-control">
                  
                  <br>
                  <input type="radio" name="type" value="agent" checked> Agent<br>
                  <input type="radio" name="type" value="customer"> Customer<br>
                  <input type="radio" name="type" value="distributer"> Distributer<br>
                  </div>
                    <!-- <div class="dropdown">
                    <p>Select Account</p>
                     <select name="topology" name="person">
                          <option value="T1">Owner</option>
                          <option value="T2">Worker</option>
                          </select>
                  </div>-->
              </div> 
              </div>
            </div>
            <div class="col-sm-8 form-group">

            </div>

        </div>
        <br><br>


        <div class="row">
              <br>
              



              <div class="col-sm-6 form-group">

                

                <div class="col-xs-8 col-sm-8 col-md-8">
                        <input type="submit" name="SUBMIT_MESSAGE" value="LOG IN" class="btn btn-lg btn-success btn-block">

              </div>
              </div>
              <div class="col-sm-6 form-group">

              </div>
        </div>

              


          </div>

    </form>
    


</div>

  <div class="row animated slideInleft" id="img2">
        <div class="col-sm-12 form-group  text-center " id="but">
        
          <a href="#"  class="btn btn-success" >button</a>
        </div>
      </div>
        






<div class="container">
<div class="row">
        
        <div class="col-sm-7 form-group"  style="background-color:pink;">
        
        <center>
          <h2>Introducing News Scheduling</h2>

        </center>
        <p>
          <h3>Hello,</h3> 
          <br>
          Yes,now there solution to your daily problem.<br>
          Now no need to go out to buy newspaper. No need to read the same paper whole month.<br>

           Now you are just one click away from your favourite newspapers. Any palce ,any day ,any newspaper , any time ....!!!
           <h2>SO why to wait ??</h2>

           <a href="order.php" class="btn btn-success long long-btn ">ORDER NOW</a>




        </p>

        </div>
        <div class="col-sm-5 form-group">
          <div class="panel">
            
           
          <img class="img-responsive" src="p3.jpg" height="200" width="600"  > 
        </div>
        

</div>
</div>
</div>


<!-- <div class="row">
        <div class="col-sm-12 form-group">
        <h2></h2>
        
          <h2>Contact</h2>

        

        </div>

</div> -->


<footer class="container">
    <div class="row">
      <p class="col-sm-4">&copy; 2016 Skillfair</p>
      <ul class="col-sm-8">
        <li class="col-sm-1">
          <img src="twitter.jpg">
        </li>
        <li class="col-sm-1">
          <img src="facebook.jpg">
        </li>
        <li class="col-sm-1">
          <img src="instagram.jpg">
        </li>
        <li class="col-sm-1">
          <img src="youtube.jpg">
        </li>
      </ul>
    </div>
  </footer><




  </body>

  </html>