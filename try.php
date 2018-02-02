<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
  <title>News Scheduling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "Login Form",
            width: 600,
            height: 600
        });
        $("#btnShow").click(function () {
            $('#dialog').dialog('open');
        });
    });
</script>
</head>
<body>
<input type="button" id="btnShow" value="Show Popup" />
<div id="dialog" style="display: none" align = "center">
    
    <form action="login.php" method="post" onsubmit="return validateForm()" role="form" name="myForm">
        <br><br><br><br>
        <div class="container">
        <div class="row">
              

            <div class="modal-body">
              <div class="col-sm-4 form-group">

              <div class="Panel with panel-danger class">
                  <div class="panel-heading">
                <label for="user">USER ID:</label>
                <input type="text" placeholder="Enter your id Here.."  name="user" class="form-control">

                <br>


                <label for="password">password</label>
                <input type="password" placeholder="Enter your password Here.." name="password"  class="form-control">
                  
                  <br>
                  <input type="radio" name="type" value="agent" checked> Agent<br>
                  <input type="radio" name="type" value="customer"> Customer<br>
                  <input type="radio" name="type" value="distributer"> Distributer<br>
                  </div>
                    <!-- <div class="dropdown">
                    <p>Select Account</p>
                     <select name="topology" name="person">
                          <option value="T1">Owner</option>
                          <option value="T2">Worker</option>
                          </select>
                  </div>-->
              </div> 
              </div>
            </div>
            <div class="col-sm-8 form-group">

            </div>

        </div>
        <br><br>


        <div class="row">
              <br>
              



              <div class="col-sm-6 form-group">

                

                <div class="col-xs-8 col-sm-8 col-md-8">
                        <input type="submit" name="SUBMIT_MESSAGE" value="LOG IN" class="btn btn-lg btn-success btn-block">

              </div>
              </div>
              <div class="col-sm-6 form-group">

              </div>
        </div>

              


          </div>

    </form>
    



</div>

  
   
  </body>
  </html>
