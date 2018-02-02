<a href="https://www.facebook.com/sidc1310" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com/iamsid1310/" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/cul_sidc" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/siddhant-chigale-800447126/" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>

<?php
      if(loggedin()===true)
      {   $logout="LOG OUT";

          echo '<a href="logout.php" class="w3-bar-item w3-button w3-right active">'.$logout.' </a>';

      }
      else{

          $login="Login";
          $signup="Sign Up";
          echo '<a href="login.php" class="w3-bar-item w3-button w3-right active">'.$login.' </a>';
          echo '<a href="signup.php" class="w3-bar-item w3-button w3-right active">'.$signup.' </a>';
      }
  ?>
  
  
  
  
  <a href="home1.php" class="w3-bar-item w3-button w3-right active">Home <span class="glyphicon glyphicon-home"></span></a>
  
  <?php
      if(loggedin()===true)
      {
        $id=$_SESSION['id'];
        if($_SESSION['type']==="1")
          $sql = "SELECT * FROM owner where id=$id";
        else if($_SESSION['type']==="2")
          $sql = "SELECT * FROM worker where id=$id";
        else if($_SESSION['type']==="3")
          $sql = "SELECT * FROM consumer where cid=$id";

    
    if($result = mysqli_query($con, $sql)){

        if(mysqli_num_rows($result) > 0)
        {
            
            while($row = mysqli_fetch_array($result)){
                
                
                $prof=$row['name'];
            

        }
 
        mysqli_free_result($result);
      }
    }
        if($_SESSION['type']==="3")
        {
          echo '<a href="customer.php" class="w3-bar-item w3-button w3-right active">'. $prof .'</a>';
          echo '<a href="order1.php" class="w3-bar-item w3-button w3-right active">Order <span class="glyphicon glyphicon-home"></span></a>';
        }
        else if($_SESSION['type']==="1")
          echo '<a href="distributer.php" class="w3-bar-item w3-button w3-right active">' .$prof. '</a>';
        else if($_SESSION['type']==="2")
          echo '<a href="agent.php" class="w3-bar-item w3-button w3-right active">' .$prof. '</a>';



   
    



      }

      else{
          echo '<a href="login.php" class="w3-bar-item w3-button w3-right active">Order <span class="glyphicon glyphicon-home"></span></a>';

      }

      
      
  ?>
  