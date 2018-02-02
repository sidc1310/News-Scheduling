<?php 
require('connect.php');
//session_start();
require('functions.php');
$log=loggedin();
    if($log===false)
    {
        header('Refresh:0 url=login.php');
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

  	background-image: url("x1.ng");
  }
 </style>
  <script>

function validateForm() {
    var x = document.forms["myForm"]["old"].value;
    var y = document.forms["myForm"]["new"].value;
    var z = document.forms["myForm"]["new1"].value;
    if (x =="" || y=="" || z=="") {
        alert("All fields must be filled out");
        return false;
    }
    
}
</script>

 </head>
 <body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <?php
  require('navbar.php');
  ?> 
  
  
</div>


    <form action="change_password.php" onsubmit="return validateForm()" name="myForm" method="post" role="form">
        <br><br><br><br>
        <div class="container">
        <div class="row">
              <div class="col-sm-4 form-group">

              </div>

            <div class="modal-body">
              <div class="col-sm-4 form-group">

              <div class="Panel with panel-danger class">
                  <div class="panel-heading">
                <label for="old">Old Password:</label>
                <input type="Password" placeholder="Enter old password Here.."  name="old" class="form-control">
                <br>
                <label for="new">New Password :</label>
                <input type="password" placeholder="Enter new password here.." name="new"  class="form-control">
                <br>
                <label for="new1">Re-enter New Password : </label>
                <input type="password" placeholder="Enter Re-enter new password here.." name="new1"  class="form-control">
                  
                  
                  </div>
                    
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
                        <input type="submit" name="SUBMIT" value="Change Password" class="btn btn-lg btn-success btn-block">

              </div>
              </div>
              <div class="col-sm-1 form-group">

              </div>
        </div>
          </div>

    </form>

    <!--  <?php
      require('footer.php');
    ?>
 -->
 </body>


 </html>


<?php
    require('connect.php');

if(isset($_POST['SUBMIT']))
{
  // echo "in if";
  if($_POST['old']=="" || $_POST['new']=="" || $_POST['new1']=="")
    {

  //echo "Plz Enter the proper data";
  echo "<script type='text/javascript'>alert('All fields must be filled out..!!!');</script>";

  }

  else
  { 
      
    $old=$_POST['old'];
    $new=$_POST['new'];
    $new1=$_POST['new1'];
    
    if($old===$new)
    {
      echo "<script type='text/javascript'>alert('Old and new passwords are same.');</script>";
    }
    else if($new1!==$new)
    {
      echo "<script type='text/javascript'>alert('Password doesn't match . Please Re-enter new Password. ');</script>";
    }
    else{
      
      $id=$_SESSION['id'];
      $sql = "SELECT * FROM worker where id=$id";

      if($result = mysqli_query($con, $sql)){

          if(mysqli_num_rows($result) > 0)
          {           
              
                      echo "pass";
                      while($row = mysqli_fetch_array($result)){
                      $p=$row['pass']; 
                           
                      }           

              mysqli_free_result($result);
      }
    }
    echo "old entered= $old";
    echo "above $p old database";
    echo $p==$old;
    // if($p==$old)
    // { 
    //   echo "<script type='text/javascript'>alert($p);</script>";
      

    // }
    // else{
    //     echo "<script type='text/javascript'>alert('Sorry !!! Your Password doesn't match with last/old password. Please enter right password. ');</script>"; 
    // }

    $sql="update worker set pass=$old where id=$id";
    $insert = mysqli_query($con,$sql);
      echo $insert;
       // Print response from MySQL
        if ( $insert ) 
        {   
            
            echo "<script type='text/javascript'>alert('Password Successfully changed.');</script>";
        } 
        else 
        { 
          echo "something wrong";
            
        }
  


            


    }
  }
}
    
    
   


?>