<?php
  require('connect.php');
    require('functions.php');

    $log=loggedin();
    if($log===true)
    {      
        if($_SESSION['type']!="2")
        {
           header('Refresh:0 url=agent.php');
        }
        else if($_SESSION['type']!="3")
        {
           header('Refresh:0 url=customer.php');
        }
        else if($_SESSION['type']!="1")
        {
           header('Refresh:0 url=distributer.php');
        }

    }
    
?>
<?php     
require('connect.php');

if (isset($_POST['SUBMIT'])) 
{ echo "below submit";

  if($_POST['user']=="" || $_POST['pass']=="" || $_POST['name']=="" || $_POST['phno']=="" || $_POST['addr']=="")
  {
        echo '<script>alert("Name must be filled out!!");</script>';
  }
  else
  {
      
      $user_name=$_POST['user'];
      $user_name=test_input($user_name);
      
      $u_password=$_POST['pass'];
      $user_name=test_input($user_name);

      $name=$_POST['name'];
      $name=test_input($name);

      $phno=$_POST['phno'];
      $phno=test_input($phno);

      $addr=$_POST['addr'];
      $addr=test_input($addr);

      $sql = "INSERT INTO consumer(cid,Pass,name,phno,addr) VALUES ('$user_name','$u_password','$name','$phno','$addr')";
     
      echo "in else";
      $insert = mysqli_query($con,$sql);
      
       
        if ( $insert ) 
        {   
            header('Refresh:0 url=login.php');
            echo '<script>alert("CONGRATS !!! You have successfully signed up !!!");</script>';
            //echo "THANK YOU FOR REACHING OUT TO US, WE WILL GET BACK TO YOU AS SOON AS POSSIBLE....";
        } 
        else 
        {
            echo '<script>alert("Please choose another User ID . The one which you chose is already taken !!!");</script>';
        }
  
  
  }
}

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
  /*body{

  	background-image: url("x1.png");
  }*/
 </style>

 <script type="text/javascript">
   
  function validateForm() {
    var x = document.forms["myform"]["phno"].value;
    
    if (isNaN(x)) {
        alert("Please enter Numeric digits only in phone number !!!");
        return false;
    }
}



 </script>
 

 </head>
 <body class="w3-light-grey">

<div class="w3-bar w3-black w3-hide-small navbar-fixed-top">
  <a href="https://www.facebook.com/sidc1310" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/iamsid1310/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/cul_sidc" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/siddhant-chigale-800447126/" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>

  <a href="home1.php" class="w3-bar-item w3-button w3-right active">Home <span class="glyphicon glyphicon-home"></span></a>
  
  
</div>


    <form action="signup.php" method="post" onsubmit="return validateForm()" name="myform" role="form">
        <br><br>
        <div class="row">
              <div class="col-sm-4 form-group">

              </div>

            <div class="modal-body">
              <div class="col-sm-4 form-group">

              <div class="panel panel-default">
                  <div class="panel-heading">
                  <label for="name">NAME :</label>
                <input type="text" placeholder="Enter Your Name Here.."  name="name"  class="form-control">

                <br><br>

                <label for="user">USER ID:</label>
                <input type="text" placeholder="Enter Your id Here.."  name="user" class="form-control">
                <br>
                <label for="phno">Phone No:</label>
                <input type="text" placeholder="Enter Your Phone No Here.."  name="phno" class="form-control">
                <br>
                <label for="pass">Password :</label>
                <input type="password" placeholder="Enter Your password Here.."  name="pass" class="form-control">
                <br>
                <label for="addr">Address :</label>
                <input type="text" placeholder="Enter Your address Here.."  name="addr" class="form-control">
                <br>
                </div>

                </div>
                </div>
                </div>
                </div>


            <div class="row">

              <div class="col-sm-3 form-group">

              </div>



              <div class="col-sm-8 form-group">

                <br>

                <div class="col-xs-8 col-sm-8 col-md-8">
                        <input type="submit" name="SUBMIT" value="Sign Up" class="btn btn-lg btn-success btn-block">

              </div>


              <div class="col-sm-1 form-group">

              </div>
              

            </div>



            </div>
                </form>



    <!--  <?php
      require('footer.php');
     ?> -->



 </body>


 </html>
