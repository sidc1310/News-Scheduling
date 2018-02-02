<?php 
require('connect.php');
    require('functions.php');

    $log=loggedin();
    if($log!==true)
    {
        
        header('Refresh:0 url=login.php');
        

    }
    else if($_SESSION['type']==="1")
    {
       header('Refresh:0 url=distributer.php');
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
  
 </style>
 <script type="text/javascript">
    var date = $('#datepicker').val().split('-');
    var year = date[2];
    var month = date[1];
    var day = date[0];


 </script>
 

 </head>
 <body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small navbar-fixed-top">
 <?php
  require('navbar.php');
  ?>

  
</div>


<br><br>

<?php

$id=$_SESSION['id'];
$sql = "SELECT * FROM worker where id=$id";

if($result = mysqli_query($con, $sql)){

    if(mysqli_num_rows($result) > 0)
    {
        

            

            while($row = mysqli_fetch_array($result)){
                echo "<h3><strong><center>".$row['name']."<center></h3><strong>";
                  
            

            }

        

        // Free result set

        mysqli_free_result($result);
      }
    }



            ?> 

<h4>Select date to check orders</h4>
<div class="container">
<div class="row">
  
  <div class="col-sm-3">
<form action="agent.php" method="post" role="form" >
    <input type="date" id="datepicker" value="<?php echo date('Y-m-d'); ?>" name="date1">
    <br><br>
    <input type="submit" name="SUBMIT" class="btn btn-success" value="Submit" >


</form>
</div>
<div class="col-sm-9">
    
  </div>

</div>

</div>

<div class="row">
  
  <div class="col-sm-6">
    <?php
      if(isset($_POST['SUBMIT']))
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
            
            $sql = "SELECT * FROM orders where DATE('date1')=$date1 and aid=$id";
            
            if($result = mysqli_query($con, $sql)){
              
                if(mysqli_num_rows($result) > 0)
                {
                    
                        while($row = mysqli_fetch_array($result)){
                          
                            $pid=$row['pid'];
                            $add=$row['addr'];
                            $cid=$row['cid'];
                            $deli=$row['delievered'];

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

                echo '<div class="col-sm-1">';
                
                echo $cid;
                echo "</div>";
                //echo "&nbsp &nbsp &nbsp &nbsp ";
                echo '<div class="col-sm-3">';
                echo $pname;
                echo "</div>";
                echo '<div class="col-sm-4">';
                
                echo $add;
                
                
                echo "</div>";
                echo '<div class="col-sm-3">';
                if($deli=="0")
                echo "<input type='button' class='btn btn-danger' name='delievery' value='Not Delievered' >";
              else 
                echo "<input type='button' class='btn btn-success' name='delievery' value='Delievered' >";
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

   <!--  <div class="row">
  
  <div class="col-sm-8">
    <img src="b2.jpg" > 
  </div>

  <div class="col-sm-4">

  </div>

</div>
 -->

  </div>

  <div class="col-sm-3">
    
  </div>
  <div class="col-sm-3">
    
    Mark Today's delievered papers:
    <form action='agent.php' method="post">
      <div class="modal-body">
        

        <div class="panel panel-default">
        <div class="panel-heading">
        <label for="name">Enter Customer Id: :</label>
      <input type="text" name="cid" placeholder="Enter Customer Id..">
      <br><br>
      <input type="submit" name="SUBMIT2" value="Mark As Delievered" class="btn btn-success">

    </div>
  </div>
</div>



    </form>


    <?php

      if(isset($_POST['SUBMIT2']))
      {
        // echo "in if";
        if($_POST['cid']=="" )
          {

        //echo "Plz Enter the proper data";
        echo "<script type='text/javascript'>alert('Customer Id Must be filled..!!!');</script>";

        }

        else
        { 
            $date2=date('Y-m-d');
            $cid=$_POST['cid'];
            $cid=test_input($cid);
            $sql = "Update orders set delievered='1' where cid=$cid and DATE('$date2')=date1 ";
     
      echo "in else";
      $insert = mysqli_query($con,$sql);
      
       
        if ( $insert ) 
        {   
            header('Refresh:0 url=login.php');
            echo '<script>alert("Marked as delievered !!!");</script>';
            //echo "THANK YOU FOR REACHING OUT TO US, WE WILL GET BACK TO YOU AS SOON AS POSSIBLE....";
        } 
        else
        {
            echo '<script>alert("Error !!!");</script>';
        }
      }
    }
  
  


    ?>
  </div>


</div>


                






 </body>


 </html>
