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
    else if($_SESSION['type']==="3")
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
  /*body{

  	background-image: url("stud.jpg");
  }*/
 </style>
 

 </head>
 <body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small navbar-fixed-top">
  <?php
  require('navbar.php');
  ?>
  <a href="addpaper.php" class="w3-bar-item w3-button w3-left active">Add Paper</a>
  <a href="addworker.php" class="w3-bar-item w3-button w3-left active">Add Worker</a>
  
  
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
  <form action="distributer.php" method="post" role="form" >
    <input type="date" id="datepicker" value="<?php echo date('Y-m-d'); ?>" name="date1">
    <br><br>
    <input type="submit" name="SUBMIT1" class="btn btn-success" value="Submit" >


</form>
<br><br>
    <div class="row">
                <div class="table-responsive">
                <table class="table table-hover">
                
                <td>
                <tr>
                <div class="col-sm-1">
                <h4>Id</h4>
                </div>
                
                <div class="col-sm-2">

                <h4>Agent Id</h4>
                </div>
                <div class="col-sm-2">
                <h4>Paper Name</h4>
                </div>
                <div class="col-sm-4">
                
                <h4>Address</h4>
                
                
                </div>
                <div class="col-sm-2">
                <h4>Status</h4>
                </div>
                </tr>
                </td>
                </table>
                </div>
                </div>


    <?php
      if(isset($_POST['SUBMIT1']))
      {
        // echo "in if";
        if($_POST['date1']=="" )
          {

        //echo "Plz Enter the proper data";
        echo "<script type='text/javascript'>alert('Date Must be selected..!!!');</script>";

        }

        else
        { 
            $date1=$_POST['date1'];
            $id=$_SESSION['id'];
            
            $sql = "SELECT * FROM orders where DATE('date1')=$date1 ";
            
            if($result = mysqli_query($con, $sql)){
              
                if(mysqli_num_rows($result) > 0)
                {
                    
                        while($row = mysqli_fetch_array($result)){
                          
                            $pid=$row['pid'];
                            $add=$row['addr'];
                            $del=$row['delievered'];
                            $aid=$row['aid'];


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
                echo '<div class="table-responsive">';
                echo '<table class="table table-hover">';
                
                echo "<td>";
                echo "<tr>";
                echo '<div class="col-sm-1">';
                
                echo $pid;
                echo "</div>";
                //echo "&nbsp &nbsp &nbsp &nbsp ";
                echo '<div class="col-sm-2">';

                echo $aid;
                echo "</div>";
                echo '<div class="col-sm-2">';
                echo $pname;
                echo "</div>";
                echo '<div class="col-sm-4">';
                
                echo $add;
                
                
                echo "</div>";
                echo '<div class="col-sm-2">';
                if($del==="1")
                echo "<input type='button' class='btn btn-success' name='delievery' value='Delievered' >";
                else if($del==="0")
                echo "<input type='button' class='btn btn-danger' name='notdelievery' value='Not Delievered' >";
                echo "</div>";
                echo "</tr>";
                echo "</td>";
                echo "</table>";
                echo "</div>";
                echo "</div>";
                
                



        }
        mysqli_free_result($result);

      }
      else{
        echo "<script type='text/javascript'>alert('No data present!!!');</script>";
      }
    }
  }
}


    ?>
  

  </div>
  



  
<div class="col-sm-5">
</div>

</div>











 </body>


 </html>
 


