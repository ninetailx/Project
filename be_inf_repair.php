<?php
session_start();
  include("connect.php");
  $strSQL = "INSERT INTO inf_repair(inf_brand,inf_symtoms,inf_model,inf_date,inf_time,inf_type,inf_status,mem_user)VALUES ('".$_POST["brand"]."',
  '".$_POST["symtoms"]."','".$_POST["model"]."','".$_POST["date"]."','".$_POST["time"]."','".$_POST["type"]."','".waiting."','".$_SESSION["UserEmail"]."')";
  $objQuery = mysql_query($strSQL);
  echo "1";
 ?>
