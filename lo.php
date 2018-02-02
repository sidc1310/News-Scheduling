

<?php 
// require('connect.php');
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

  	background-image: url("");
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









    <form action="lo.php" method="post" onsubmit="return validateForm()" role="form" name="myForm">
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

    

    

 </body>
 </html>


 <?php
    require('connect.php');

if(isset($_POST['SUBMIT_MESSAGE']))
{
 // echo "in if";
  
  if($_POST['user']=="" || $_POST['password']=="")
    {

  
  

  

  }
  

  else
  { 
      $type=$_POST['type'];
      // if($type=="agent")
      //   echo "agent";
      // else if($type=="customer")
      //   echo "customer";
      // else
      //   echo "nothing";
    $username=$_POST['user'];
    $password=$_POST['password'];
    //$person=$_POST['person'];

    // if($person=="Owner")
    //   echo "Owner";
    // else
    //   echo "worker";
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
                    
                    if($type=="distributer"){
                      $_SESSION['type']="1";
                    header('Refresh:2 url=distributer.php');
                    }
                    else if($type=="agent"){
                    header('Refresh:2 url=agent.php');
                    $_SESSION['type']="2";
                    }
                    else if($type=="customer"){
                    header('Refresh:2 url=customer.php');
                    $_SESSION['type']="3";
                    }
                    
                   //session set
                  // $_SESSION['pass']=$row['pass'];
                  // $_SESSION['user']=session_id();
                   //e6hweset($_SESSION['user']);
                    
                  // header('LOCATION:welcome.php');

                   
                   
          }
          
        }
        else
        {
          //echo "password or email id is not correct...111";
          echo "<script type='text/javascript'>alert('password or email id is not correct..!!!');</script>";
        }
    }
}
// else{
//   //echo "There is a problem in submit";
//   echo "<script type='text/javascript'>alert('There is a problem in submit  !!!!');</script>";
// }


?>