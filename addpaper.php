<?php 
require('connect.php');
    require('functions.php');

    $log=loggedin();
    if($log!==true)
    {
        
        header('Refresh:0 url=login.php');
        

    }
    else if($_SESSION['type1']=="2")
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

    background-image: url("");
  }
  </style>
  <script>

function validateForm() {
    var x = document.forms["myForm"]["pname"].value;
    var y = document.forms["myForm"]["price"].value;
    if (x =="" || y=="") {
        alert("All fields must be filled out");
        return false;
    }
    if(isNaN(y))
    {
      alert("Please Enter the numeric number.");
        return false;
    }
}
</script>
  </head>
<body class="w3-light-grey">
<div class="w3-bar w3-black w3-hide-small">
  
  <?php
  require('navbar.php');
  ?>
</div>
  

<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>News Scheduling</b></h1>
    <h6>Welcome to the new world of news...</h6>
  </header>
  </div>


<form action="addpaper.php" onsubmit="return validateForm()" name="myForm" method="post" role="form">
        <br><br><br><br>
        <div class="container">
        <div class="row">
              <div class="col-sm-4 form-group">

              </div>

            <div class="modal-body">
              <div class="col-sm-4 form-group">

              <div class="Panel with panel-danger class">
                  <div class="panel-heading">
                <label for="pname">Paper Name:</label>
                <input type="text" placeholder="Enter paper name Here.."  name="pname" class="form-control">
                <br>
                <label for="price">Price</label>
                <input type="text" placeholder="Enter price of paper here.." name="price"  class="form-control">
                <br>
                <!-- <label for="pid">Paper ID</label>
                <input type="text" placeholder="Enter Id of paper here.." name="pid"  class="form-control">
                   -->
                  
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
                        <input type="submit" name="SUBMIT" value="ADD PAPER" class="btn btn-lg btn-success btn-block">

              </div>
              </div>
              <div class="col-sm-1 form-group">

              </div>
        </div>
          </div>

    </form>


    <?php
      require('footer.php');
    ?>

    </body>
  </html>


  <?php
    require('connect.php');

if(isset($_POST['SUBMIT']))
{
  // echo "in if";
  if($_POST['pname']=="" || $_POST['price']=="")
    {

  //echo "Plz Enter the proper data";
  echo "<script type='text/javascript'>alert('All fields must be filled out..!!!');</script>";

  }

  else
  { 
      
    $pname=$_POST['pname'];
    $pname=test_input($pname);
    $price=$_POST['price'];
    $price=test_input($price);
    // $pid=$_POST['id'];
    
    
    $r="INSERT INTO paper_name(pname,price) values('$pname','$price')"; 
    
    
    $r=mysqli_query($con,$r);

    //$s=mysqli_query($con,$s);
    if($r)
    { 
      // echo"<html>
      //   <head>
      //   <script>
      //     alert('Paper Successfully added ....!!!!');

      //   <script>

      //   </head>



      // </html>";
                   echo "Paper Successfully added ....!!!!";
                    header('Refresh:2 url=distributer.php');
                                    
      }
      
          
        
        
      }
    
}
else{
  //echo "There is a problem in submit";
}


?>