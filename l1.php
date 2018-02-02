   <br>             
              
                

                <table>
                  <tr>Paper ID</tr> &nbsp
                  <tr>Paper Name</tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <tr>Price</tr>&nbsp &nbsp &nbsp
                  <tr>Copies</tr>&nbsp
                </table>

                <?php

                
                $sql = "SELECT * FROM paper_name";

if($result = mysqli_query($con, $sql)){

    if(mysqli_num_rows($result) > 0){


        echo "<table>";

            

            while($row = mysqli_fetch_array($result)){
              
            echo "<tr>";
              
              echo "<td>" . $row['id'] . "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";

                echo "<td>" . $row['pname'] . "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
                echo "<td>" . $row['price'] . "</td>";
                
                echo"</label>";
            echo "</tr>";
            

            }

        echo "</table>";

        // Free result set

        mysqli_free_result($result);
      }
    }



            ?> 
        </label>




search_box.php


        <?php
require('connect.php');
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
<title>Order</title>
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


<style type="text/css">
  #search-box {
position: relative;
width: 30%;
margin: 0;
}

#search-form 
{
height: 40px;
border: 1px solid #999;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
background-color: #fff;
overflow: hidden;
}

#search-text 
{
font-size: 14px;
color: #ddd;
border-width: 0;
background: transparent;
}

#search-box input[type="text"]
{
width: 60%;
padding: 11px 0 12px 1em;
color: #333;
outline: none;
}

#search-button {
position: absolute;
top: 0;
right: 0;
height: 42px;
width: 80px;
font-size: 14px;
color: #fff;
text-align: center;
line-height: 42px;
border-width: 0;
background-color:#000000;
-webkit-border-radius: 0px 5px 5px 0px;
-moz-border-radius: 0px 5px 5px 0px;
border-radius: 0px 5px 5px 0px;
cursor: pointer;
}
</style>
</head>
<body class="w3-light-grey">

<div class="w3-bar w3-black w3-hide-small">
  <?php
  require('navbar.php');
  ?>
</div>

<div class="w3-content" style="max-width:1600px">
  <br>
<h3>Enter Name of Newspaper to order</h3>
  <div id='search-box'>
<form action='search_box.php' id='search-form' method='post' target='_top'>
<input id='search-text' name='q' placeholder='Search' type='text'/>
<button id='search-button' type='submit'>                     
<span>Search</span>
</button>
</form>
</div>  
</div>
</body>
</html>

