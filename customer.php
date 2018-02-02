<?php 
require('connect.php');
    require('functions.php');

    $log=loggedin();
    if($log!==true)
    {
        
        header('Refresh:0 url=login.php');
        

    }
    else if($_SESSION['type']==="2")
    {
       header('Refresh:0 url=agent.php');
    }
    else if($_SESSION['type']==="1")
    {
       header('Refresh:0 url=distributer.php');
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

  	background-image: url("stud.jpg");
  }
 </style>
 

 </head>
 <body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small navbar-fixed-top">
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

<div class="row">
  
  <div class="col-sm-7">
    <img src="x5.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">



  </div>
  <div class="col-sm-1">
    



  </div>

  
   <div class="col-sm-4">
    <h2><center>Your Orders</center></h2>
    <?php
      $id=$_SESSION['id'];
$sql = "SELECT * FROM orders where cid=$id";

if($result = mysqli_query($con, $sql)){

    if(mysqli_num_rows($result) > 0)
    {
        
            while($row = mysqli_fetch_array($result)){

                $pid=$row['pid'];
                $delievered=$row['delievered'];
                $date=$row['date1'];
                
                $sql1 = "SELECT * FROM paper_name where id=$pid";

                if($result1 = mysqli_query($con, $sql1)){

                    if(mysqli_num_rows($result1) > 0)
                    {
                        
                            while($row1 = mysqli_fetch_array($result1)){
                                  
                                $pname=$row1['pname'];
                                

                            }
                            
                            mysqli_free_result($result1);

                    }
                }
                echo '<div class="row">';
                echo "<table>";
                echo "<td>";
                echo "<tr>";
                echo '<div class="col-sm-4">';
                
                echo $pname;
                echo "</div>";
                //echo "&nbsp &nbsp &nbsp &nbsp ";
                echo '<div class="col-sm-4">';
                echo $date;
                echo "</div>";
                echo '<div class="col-sm-4">';
                if($delievered==0)
                echo "Not delievered";
                if($delievered==1)
                echo "Delievered";
                echo "</div>";
                echo "</tr>";
                echo "</td>";
                echo "</table>";
                echo "</div>";




              }

        

        // Free result set

        mysqli_free_result($result);
      }
    }




    ?>



  </div>
  




</div>







<?php
  require('footer.php');
?>


 </body>


 </html>
