<?php
session_start();
include("../backend/connect.php");
$formid = isset($_SESSION['formid']) ? $_SESSION['formid'] : "";
echo $_SESSION["UserEmail"];

if ($formid != $_POST['formid']) {
	echo "E00001!! SESSION ERROR RETRY AGAINT.";
} else {
	unset($_SESSION['formid']);
	 if ($_POST) {

	// 	$order_fullname = mysql_real_escape_string($_POST['order_fullname']);
	// 	$order_address = mysql_real_escape_string($_POST['order_address']);
	// 	$order_phone = mysql_real_escape_string($_POST['order_phone']);
	//
	// 	$meSql = "INSERT INTO orders (order_date, order_fullname, order_address, order_phone) VALUES (NOW(),'{$order_fullname}','{$order_address}','{$order_phone}') ";
	// 	$meQeury = mysql_query($meSql);
	// 	if ($meQeury) {
			// $empp_id = mysql_insert_id();
			// $member_email = mysql_insert_id();
			$User = $_SESSION["UserEmail"];
			$time = DATE('H:i:s');
      $date = DATE('D:m:Y');
			//$count = $Order_ID+1;
			$Transaction = "INSERT INTO transaction(Trans_ID,Trans_Time)VALUES(null,'$time')";
			mysql_query($Transaction);

			$conOrder = "SELECT * FROM transaction WHERE Trans_Time='".$time."'";
			$conQuery = mysql_query($conOrder);
			$conRow = mysql_fetch_assoc($conQuery);

			 for ($i = 0; $i < count($_POST['qty']); $i++) {
				// $order_detail_quantity = mysql_real_escape_string($_SESSION['qty'][$i]);
				// // $order_detail_price = mysql_real_escape_string($_POST['product_price'][$i]);
				$detail_id = mysql_real_escape_string($_POST['detail_id'][$i]);
				//echo $User;
				$order_detail_quantity = mysql_real_escape_string($_POST['qty'][$i]);
				$Qorder = "INSERT INTO orders(Order_ID,mem_email,Det_ID,QUANTITY,Trans_Time,Trans_ID)VALUES(null,'$User','$detail_id','$order_detail_quantity','$time',	'".$conRow['Trans_ID']."')";
				mysql_query($Qorder);
				//echo $i;

			 }

			mysql_close();
			// unset($_SESSION['cart']);
			// unset($_SESSION['qty']);
      echo "<script type='text/javascript'>";
      echo "alert ('สั่งซื้อสินค้าเรียบร้อย');";
      echo "window.location='http://localhost/comrpr/pagelogin/FinComset.php?a=order';";
      echo "</script>";
		//	header('location:http://localhost/comrpr/pagelogin/FinComset.php?a=order');
	// 	}else{
	// 		mysql_close();
	// 		header('location:index.php?a=orderfail');
	// 	}
	 }

}
?>
