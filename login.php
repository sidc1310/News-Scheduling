<?php
    
    require('connect.php');
    require('functions.php');

    $log=loggedin();
    if($log===true)
    {
        if($_SESSION['type']==="1")
          header('Refresh:0 url=distributer.php');
        else if($_SESSION['type']==="2")
          header('Refresh:0 url=agent.php');
        else if($_SESSION['type']==="3")
          header('Refresh:0 url=customer.php');

    }


if(isset($_POST['SUBMIT_MESSAGE']))
{
  echo "in if"; 
  
  if($_POST['user']=="" || $_POST['password']=="")
    {

     echo '<script>alert("All fields must be filled out");</script>';

  

  

  }
  

  else
  { 
    $type=$_POST['type'];
      
    $username=$_POST['user'];
    $username=test_input($username);
    $password=$_POST['password'];
    $password=test_input($password);
    
    if($type=="distributer"){
    $r="SELECT id AND pass FROM owner WHERE id='".$username."' and pass='".$password."'"; 
    //$s="SELECT pass FROM name WHERE user='".$username."' and pass='".$password."'";
    }
    else if($type=="agent")
    {
      $r="SELECT id AND pass FROM worker WHERE id='".$username."' and pass='".$password."'"; 
    }
    else if($type=="customer")
    {
      $r="SELECT cid AND pass FROM consumer WHERE cid='".$username."' and pass='".$password."'"; 
    }
    else {
      echo"some problem";
    }
    $r=mysqli_query($con,$r);

    //$s=mysqli_query($con,$s);
    if(mysqli_num_rows($r) > 0)
    {
      
      echo "above while";
      while($row=mysqli_fetch_array($r))

      {             
                    
                    $_SESSION['id']=$username;
                    echo $_SESSION['id'];
                   // session_start();
                    if($type=="distributer")
                    {
                      $_SESSION['type']="1";
                      echo "1";
                    header('Refresh:0 url=distributer.php');
                    }
                    else if($type=="agent"){
                    $_SESSION['type']="2";
                    echo "2";
                    header('Refresh:0 url=agent.php');
                    
                    }
                    else if($type=="customer"){
                    $_SESSION['type']="3";
                    echo "3";
                    header('Refresh:0 url=customer.php');
                    
                    }
                    
                   

                   
                   
          }
          
        }
        else
        {
          
          echo "<script type='text/javascript'>alert('password or email id is not correct..!!!');</script>";
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
  body{

  	background-image: url("x100.png");
  }
 </style>
 
 <script>
function validateForm() {
    var x = document.forms["myForm"]["user"].value;
    var y = document.forms["myForm"]["password"].value;
    if (x =="" || y=="") {
        alert("Name must be filled out");
        return false;
    }
}
</script>



 </head>
 <body class="w3-light-grey">

 <div class="w3-bar w3-black w3-hide-small navbar-fixed-top">
  <a href="https://www.facebook.com/sidc1310" class="w3-bar-item w3-button" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/iamsid1310/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/cul_sidc" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/siddhant-chigale-800447126/" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  
  <a href="home1.php" class="w3-bar-item w3-button w3-right active">Home <span class="glyphicon glyphicon-home"></span></a>
  
</div> 





    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validateForm()" role="form" name="myForm">
        <br><br><br><br>
        <div class="container">
        <div class="row">
              <div class="col-sm-4 form-group">

              </div>

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
        </div>
        <br><br>


        <div class="row">
              <br>
              <div class="col-sm-3 form-group">

              </div>



              <div class="col-sm-8 form-group">

                

                <div class="col-xs-8 col-sm-8 col-md-8">
                        <input type="submit" name="SUBMIT_MESSAGE" value="LOG IN" class="btn btn-lg btn-success btn-block">

              </div>
              </div>
              <div class="col-sm-1 form-group">

              </div>
        </div>

              


          </div>

    </form>

    <div class="row">
              <br>
              <div class="col-sm-7 form-group">

              </div>
              <div class="col-sm-2 form-group">
   
                <a href="signup.php" class="btn btn-danger">Sign Up</a>
              </div>
              <div class="col-sm-3 form-group">

              </div>
      </div>
      <br><br>

    <?php
      require('footer.php');
    ?>
    

 </body>
 </html>


 