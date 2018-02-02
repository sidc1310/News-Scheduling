<?php 
require('connect.php');
    require('functions.php');

    $log=loggedin();
    if($log!==true)
    {
        
        header('Refresh:0 url=login.php');
        

    }
    else if($_SESSION['type']=="2")
    {
       header('Refresh:0 url=agent.php');
    }
    else if($_SESSION['type']=="3")
    {
       header('Refresh:0 url=customer.php');
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
  body{

    background-image: url("x1.png");
  }
</style>
  <script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["user"].value;
    var z = document.forms["myForm"]["phno"].value;
    var a = document.forms["myForm"]["pass"].value;
    if (x =="" || y=="" || z =="" || a=="") {
        alert("All fields must be filled out");
        return false;
    }
    if(isNaN(z))
    {
      alert("Please Enter the numeric number.");
        return false;
    }
    
}
</script>
 
 

 </head>
 <body class="w3-light-grey">

<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  
  <a href="home1.php" class="w3-bar-item w3-button w3-right active">Home <span class="glyphicon glyphicon-home"></span></a>
  
</div>

<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>News Scheduling</b></h1>
    <h6>Welcome to the new world of news...</h6>
  </header>
  </div>


    <h2 align="center"><font color="white">Enter Agent information to add</font></h2>


    <form action="addworker.php" onsubmit="return validateForm()" name="myForm" method="post" role="form">
        <br><br><br><br>
        <div class="row">
              <div class="col-sm-4 form-group">

              </div>

            <div class="modal-body">
              <div class="col-sm-4 form-group">

              <div class="panel panel-default">
                  <div class="panel-heading">
                  <label for="name">NAME :</label>
                <input type="text" placeholder="Enter Worker's Name Here.."  name="name"  class="form-control">

                <br><br>

                <label for="user">USER ID:</label>
                <input type="text" placeholder="Enter Worker's  id Here.."  name="user" class="form-control">

                <label for="phno">Phone No:</label>
                <input type="text" placeholder="Enter Worker's Phone No Here.."  name="phno" class="form-control">

                <label for="pass">Password :</label>
                <input type="password" placeholder="Enter Worker's password Here.."  name="pass" class="form-control">

                </div>

                </div>
                </div>
                </div>
                </div>


            <div class="row">

              <div class="col-sm-3 form-group">

              </div>



              <div class="col-sm-8 form-group">

                <br><br><br>

                <div class="col-xs-8 col-sm-8 col-md-8">
                        <input type="submit" name="SUBMIT" value="ADD WOrker" class="btn btn-lg btn-success btn-block">

              </div>


              <div class="col-sm-1 form-group">

              </div>
              

            </div>
          </div>




                </form>



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



<?php     
Include('connect.php');

if (isset($_POST['SUBMIT'])) 
{

  if($_POST['user']=="" || $_POST['name']=="" || $_POST['pass']=="" || $_POST['phno']=="" )
  {
        echo " <br><br><br<br><br><br>All the fields must be filled";
  }
  else
  {
      
      $user=$_POST['user'];
      $user=test_input($user);
      
      $pass=$_POST['pass'];
      $pass=test_input($pass);

      $name=$_POST['name'];
      $name=test_input($name);

      $phno=$_POST['phno'];
      $phno=test_input($phno);
      
      $sql = "insert into worker(id,pass,name,phno) values ('$user','$pass','$name','$phno') ";
     // die("Error: {$mysqli->errno} : {$mysqli->error}");
      echo "in else";
      $insert = mysqli_query($con,$sql);
      
       
        if ( $insert ) 
        {   
            header('Refresh:3 url=owner.php');
            
            echo "<script type='text/javascript'>alert('You Have successfully added worker !!!');</script>";
        } 
        else 
        { 
           
            echo "<script type='text/javascript'>alert('Data didnt insert..!!!');</script>";
            
        }
  
  
  }
}


?>