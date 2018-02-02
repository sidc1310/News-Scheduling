<?php
require('connect.php');
    require('functions.php');

    $log=loggedin();
    if($log!==true)
    {
        
        header('Refresh:0 url=login.php');
        

    }
    else if($_SESSION['type']=="2")
    {
       header('Refresh:0 url=agent.php');
    }
    else if($_SESSION['type']=="1")
    {
       header('Refresh:0 url=distributer.php');
    }


?>





<?php

  require('connect.php');


if (isset($_POST['SUBMIT'])) 
{ echo "below submit";
  for($i=1;$i<=5;$i++)
  {
    if(isset($_POST['box'.$i]))
    {
        $box=$_POST['box'.$i];
        
        echo "s".$i;

      











   if($_POST['pname'.$i]=="" || $_POST['id'.$i]=="" || $_POST['date']=="" || $_POST['addr']=="" || $_POST['price'.$i]=="" || $_POST['dropdown']==""  ) 
  {
        echo '<script>alert("All Fields must be filled out!!");</script>';
  }
  else
  {

  		// echo '<script>alert("Filled !!");</script>';


      // $dropdown=$_POST['dropdown'];
      // echo $dropdown;

      $dropdown=$_POST['dropdown'];
      echo "dropdown=".$dropdown;
      $name=$_POST['pname'.$i];
      echo "name=".$name;
      $cid=$_SESSION['id'];
      echo "cid=".$cid;
      $pid=$_POST['id'.$i];
      echo "pid=".$pid;
      
      $date=$_POST['date'];
      echo "date=".$date;
      //$dropdown=$_POST['dropdown'];
      $addr=$_POST['addr'];
      echo "addr=".$addr;
      $price=$_POST['price'.$i];
      echo "price=".$price;

      
      echo "aid=".$aid;
      if($dropdown=="Bibwewadi" || $dropdown=="Kondhwa" )
      	$aid="7890";
      else if($dropdown=="Balaji Nagar" || $dropdown=="Mukund Nagar" )
      	$aid="6789";
          
      $del="0";
      $cost="6";


      $sql = "INSERT INTO orders(cid,aid,pid,delievered,date1,addr,locality,price,cost) VALUES ('$cid','$aid','$pid','$del','$date','$addr','$dropdown','$price','$cost')";
     
      echo "in else";
      $insert = mysqli_query($con,$sql);
      
       
        if ( $insert ) 
        {   
            header('Refresh:0 url=or.php');
            echo '<script>alert("CONGRATS !!! Your order has been placed!!!");</script>';
            //echo "THANK YOU FOR REACHING OUT TO US, WE WILL GET BACK TO YOU AS SOON AS POSSIBLE....";
        } 
        else 
        {
            echo '<script>alert("Please choose another User ID . The one which you chose is already taken !!!");</script>';
        }

      }

   }

    else{
      echo "not checked".$i;
    }
  
  }

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
      



  
    </style>
}

<script type="text/javascript">
  $(function() {
    for(i=1;i<=5;i++){
    var selected = $('#dropid'+i+' option:selected'), // Seems to be unused
        
        $checkid = $('#checkid'+i), // Always cache your queries
        $dropdown = $('#dropid'+i); // Caching queries
        //var index = $('#dropid').val();

    $dropdown.hide(); // Hidden by default initially

    $checkid.change(function () {
      $dropdown = $("#dropid"+$(this).attr('id').substr($(this).attr('id').length -1));
        if ($(this).prop('checked')) {

            $dropdown.show().focus().click();
        } 
        else{
            $(this).prop('checked', false);
            $dropdown.blur().hide();
        }



    });
    $checkid.change(); // This sets initial state

    $checkid = $('#checkid'+i), 
    $box= $('#box'+i);

    

    $checkid.on('change', function(){
        $box = $("#box"+$(this).attr('id').substr($(this).attr('id').length -1));
        $box.prop('checked',this.checked);
    });


   
}
});
</script>

<script type="text/javascript">
//  for(i=1;i<=5;i++){

//  	var x=$('#dropid'+i).$('select option:selected').text();
//  	var x=$('#dropid'+i).$('select option:selected').text();

// }


// 	$('#dropid'+i).change(function(){
//     // Resize the select
//     $('#fall'+i).attr('size',$(".SlectBox option:selected").length);
//     // Empty children
//     $('#fall'+i).empty();
//     // For each selected options create one on the other select
//     $.each($(".SlectBox option:selected"),function (i, item) {
//             $('#fall'+i).append($('<option>', { 
//                 value: item.value,
//                 text : item.text 
//             }));
//      });
// });


 





	for(i=1;i<=5;i++){

		$dropid = $('#dropid'+i),
		$fall=$('#fall'+i);
		$dropid.on("change", function(){

			$fall = $("#fall"+$(this).attr('id').substr($(this).attr('id').length -1));
			$fall.val($('#dropid'+i).val());

		}



	// $dropid = $('#dropid'+i),
	// $fall=$('#fall'+i);
	
	//   $dropid.on("change", function(){

	//   	var e = document.getElementById($dropid);
	// var strUser = e.options[e.selectedIndex].text;
	//   	//$fall.val(post);
	//   	var element = document.getElementById($fall);
	//     element.value = strUser;
 //  });


// $("#dropid"+i).on("change", function(){
//     var accval  = $(this).val().split("-");
//     var id      = accval[0];
//     var name    = accval[1];
//     var post    = accval[2];
//     var status  = accval[3];

//     $("#fall"+i).val(1);
// });





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



<div class="row">
  <div class="col-sm-4">
  	
    <div class="modal-body">
          <br>             
              
                <div class="Panel with panel-default class">
                  <div class="panel-heading">
                
                <table>
                  <tr>Paper ID
                  </tr> &nbsp
                  <tr>Paper Name</tr>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
              
              echo '<td><div class="checkbox" >
                      <label><input type="checkbox" value="check" id="checkid'.$row['id'].'"  >' . $row['id'] . "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label></div></td>";

                echo "<td>" . $row['pname'] . "&nbsp &nbsp &nbsp &nbsp  </td>";
                echo "<td>" . $row['price'] . "&nbsp &nbsp &nbsp &nbsp </td>";
                echo '<td><select id="dropid'.$row['id'].'" name="num">
                      <option value="0" id="0">0</option>
                      <option value="1" id="1">1</option>
                      <option value="2" id="2">2</option>
                      <option value="3" id="3">3</option>
                      <option value="4" id="4">4</option>
                      <option value="5" id="5">5</option>
                      <option value="6" id="6">6</option>
                      <option value="7" id="7">7</option>
                      <option value="8" id="8">8</option>
                      <option value="9" id="9">9</option>
                      <option value="10" id="10">10</option>
                      
                    </select></td>';

              
                    
                     echo "</tr>";
               
            

            }


        echo "</table>";

        // Free result set

        mysqli_free_result($result);
      }
    }

          

            ?> 
            <!-- <script type="text/javascript">
            	for(i=1;i<=5;i++){
            		$dropid.on("change", function(){

            	echo "$('#dropid'+i).val()";
            		}
            	}
            </script> -->
            <form action="or.php" method="post" role="form" name="myform">
                              <?php for($i=1;$i<=5;$i++){

                              		$sql = "SELECT * FROM paper_name where $i=id";
            
						            if($result = mysqli_query($con, $sql))
						            {
						              
						                if(mysqli_num_rows($result) > 0)
						                {
						                    
						                        while($row = mysqli_fetch_array($result)){
						                          
						                            $pname=$row['pname'];
						                            $price=$row['price'];

						                            echo '<input type="hidden" name="id'.$i.'" value="'.$i.'" />
                                    <input type="hidden" name="pname'.$i.'" value="'.$row['pname'].'" />
                                    <input type="hidden" name="price'.$i.'" value="'.$row['price'].'" />

                                    <select id="fall'.$i.'" name="fall" style="display: none">
				                      <option value="0" id="0">0</option>
				                      <option value="1" id="1">1</option>
				                      <option value="2" id="2">2</option>
				                      <option value="3" id="3">3</option>
				                      <option value="4" id="4">4</option>
				                      <option value="5" id="5">5</option>
				                      <option value="6" id="6">6</option>
				                      <option value="7" id="7">7</option>
				                      <option value="8" id="8">8</option>
				                      <option value="9" id="9">9</option>
				                      <option value="10" id="10">10</option>
				                      
				                    </select>


                                    <input type="checkbox"  name="box'.$i.'" style="display: none" id="box'.$i.'">';
						                            
						                        }
						                    }
						                }




                                   // echo '<input type="hidden" name="id'.$i.'" value="'.$i.'" />
                                   //  <input type="hidden" name="pname'.$i.'" value="'.$row['pname'].'" />
                                   //  <input type="hidden" name="price'.$i.'" value="'.$row['price'].'" />
                                   //  <input type="checkbox"  name="box'.$i.'" id="box'.$i.'">
                               
                               //';
                             }?>
                             Address: <input type="textarea" name="addr" >
                             <br><br>
                            Enter Date: <input type="date" name="date" id="date" value="'.date("d-m-Y").'" required />
                            <br><br>

                                    Locality:<td><select id="dropid" name="dropdown">
                                      <option value="Balaji Nagar" id="0">Balaji Nagar</option>
                                      <option value="Bibwewadi" id="1">Bibwewadi</option>
                                      <option value="Kondhwa" id="2">Kondhwa</option>
                                      <option value="Mukund Nagar" id="3">Mukund Nagar</option>
                                      
                                      <option value="Upper" id="10">Upper</option>
                                      
                                    </select></td>
                                    <br><br><br>
                               <div class="col-xs-8 col-sm-8 col-md-8">
                                    <input type="submit" name="SUBMIT" value="ORDER" class="btn btn-lg btn-success btn-block">
                                    </div>      
                
            </form>    

            <br><br><br>
            
            
              



                </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5">
        </div>
        <div class="col-sm-3">
        
      <div class="w3-white w3-margin">
        <img src="p3.jpg" alt="Jane" style="width:100%" class="grayscale" >
        <div class="w3-container w3-black">
          <h4>Happy Customers</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
      </div>
      <hr>
      <hr>    
  </div>
</div>
        
 
<!-- <?php
//require('footer.php');
?> -->


</div>


</body>
</html>


