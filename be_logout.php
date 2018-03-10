<?php
session_start();
unset($_SESSION['UserEmail']);
session_destroy();
echo "<script type='text/javascript'>";
echo "alert ('Logout Successfully !!');";
echo "window.location='http://localhost/comrpr/home.php';";
echo "</script>";
 ?>
