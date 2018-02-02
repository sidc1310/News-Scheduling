<?php
session_start();
function loggedin()
{
if((isset($_SESSION['id']) && $_SESSION['id']!=null) && (isset($_SESSION['type']) && $_SESSION['type']!=null)) {
        
        
        return true;

     } 
     else 
     	{
        
     	
     	return false;
    }

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>