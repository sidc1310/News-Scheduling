<?php
require('connect.php');
$u=0;
$sq="select * from paper_name";
$r1=mysqli_query($con,$sq);
if(mysqli_num_rows($r1) > 0)
    {
      
      echo "above while";
      while($row=mysqli_fetch_array($r1))
      {            
      	$u=$u+1;
      }
  }
  echo $u;
?>