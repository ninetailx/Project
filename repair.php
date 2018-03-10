<?php
session_start();
if(!isset($_SESSION['UserEmail'])) {
echo "<script type='text/javascript'>";
echo "alert('PLEASE LOGIN !!');";
echo "window.location='home.php';";
echo "</script>";
//header('Location: home.php');
die();
}
?>
