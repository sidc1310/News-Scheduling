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
   <style type="text/css">
       a:hover
        {
 
           cursor: pointer;
         
           background-color: grey;
         
        }   
   </style>
 
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script type="text/javascript">
       function fill(Value) {
 
   //Assigning value to "search" div in "search.php" file.
 
    $('#list').val(Value);
 
   //Hiding "display" div in "search.php" file.
  
   $('#display').hide();
 
}
 
$(document).ready(function() {
 
   //On pressing a key on "Search box" in "search.php" file. This function will be called.
 
   $("#search").keyup(function() {
 
       //Assigning search box value to javascript variable named as "name".
 
       var name = $('#search').val();
 
       //Validating, if "name" is empty.
 
       if (name == "") {
 
           //Assigning empty value to "display" div in "search.php" file.
 
           $("#display").html("");
 
       }
 
       //If name is not empty.
 
       else {
 
           //AJAX is called.
 
           $.ajax({
 
               //AJAX type is "Post".
 
               type: "POST",
 
               //Data will be sent to "ajax.php".
 
               url: "ajax.php",
 
               //Data, that will be sent to "ajax.php".
 
               data: {
 
                   //Assigning value of "name" into "search" variable.
 
                   search: name
 
               },
 
               //If result found, this funtion will be called.
 
               success: function(html) {
 
                   //Assigning result to "display" div in "search.php" file.
 
                   $("#display").html(html).show();
 
               }
 
           });
 
       }
 
   });
 
});
   </script>
 
   <!-- Including our scripting file. -->
 
   <script type="text/javascript" src="script.js"></script>
 
   <!-- Including CSS file. -->
 
   <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
 
 
 
<body class="w3-light-grey">

<div class="w3-bar w3-black w3-hide-small">

</div>

<div class="w3-content" style="max-width:1600px">
  <br>
<h3>Enter Name of Newspaper to order</h3>
  <div id='search-box'>
    
   <input type="text" id="search" placeholder="Search" />
 
   <br>
 
   <b>Ex: </b><i>David, Ricky, Ronaldo, Messi, Watson, Robot</i>
 
   <br />
 
   <!-- Suggestions will be displayed in below div. -->
 
   <div id="display"></div>

   <div id="list"></div>

 
 
  </div>
</div>

</body>
 
 
 
</html>

