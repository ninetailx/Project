<?php
  include "connect.php";
  $strSQL = "SELECT * FROM member WHERE mem_user = '".trim($_POST['username'])."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  if($objResult)
  {
    echo "1";
  }
  else
  {
    $strSQL = "INSERT INTO member (mem_user,mem_password,mem_name,mem_surname,mem_address,mem_road,mem_district,mem_subdistrict,mem_tel,mem_pro,mem_country)VALUES ('".$_POST["username"]."',
    '".$_POST["pwd"]."','".$_POST["name"]."','".$_POST["surname"]."','".$_POST["add"]."','".$_POST["rd"]."','".$_POST["ds"]."','".$_POST["sds"]."','".$_POST["tel"]."','".$_POST["pro"]."','".$_POST["cty"]."')";
    $objQuery = mysql_query($strSQL);
    echo "0";
  }
  mysql_close();
?>
