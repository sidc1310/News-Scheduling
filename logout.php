


<?php
session_start();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['type']);
header('Refresh:3 url=home1.php');

echo "<br><br>	LOGGING YOU OUT...!!!";


?>