<?php
  include("../backend/connect.php");
  //*** Get User Login
  session_start();
  if(!isset($_SESSION['UserEmail'])) {
  header('Location: ../home.php');
  die();
  }
  $sql = "SELECT * FROM inf_repair WHERE inf_status = 'sending' and mem_email = '".$_SESSION['UserEmail']."' ";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result,MYSQLI_ASSOC);

  $sqll = "SELECT * FROM member WHERE mem_email = '".$_SESSION['UserEmail']."' ";
  $resultt = mysql_query($sqll);
  $roww = mysql_fetch_array($resultt,MYSQLI_ASSOC);

  $sqlll = "SELECT * FROM employee WHERE emp_id = '1' ";
  $resulttt = mysql_query($sqlll);
  $rowww = mysql_fetch_array($resulttt,MYSQLI_ASSOC);

  $sqllll = "SELECT * FROM repair WHERE check_bill = '1'";
  $resultttt = mysql_query($sqllll);
  $rowwww = mysql_fetch_array($resultttt,MYSQLI_ASSOC);


// show สินค้า นาจาาาา
$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if(isset($_SESSION['qty'])){
    $meQty = 0;
    foreach($_SESSION['qty'] as $meItem){
        $meQty = $meQty + $meItem;
    }
}else{
    $meQty=0;
}
if (isset($_SESSION['cart']) and $itemCount > 0)
{
    $itemIds = "";
    foreach ($_SESSION['cart'] as $itemId)
    {
        $itemIds = $itemIds . $itemId . ",";
    }
    $inputItems = rtrim($itemIds, ",");
    $meSql = "SELECT * FROM detail WHERE Det_ID in ({$inputItems})";
    $meQuery = mysql_query($meSql);
    $meCount = mysql_num_rows($meQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#print').click(function(event){
          window.print();
      });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#home').click(function(event){
          window.location='loginhome.php';
      });
    });
    </script>

    <style media="screen">
        .a4{
          width: 768px;
          height: 1024px;
        }
        pre{
          border: 2px;
          background-color: #fff;

        }
        #logo{
          position: relative;
          left: 25px;
          top: 10px;
        }
    </style>
    <style>
    @media print
{
#print { display: none; }
#home { display: none; }
}
    </style>
</head>

<body>

  <center>

  <div id="page-content-wrapper">
    <div class="row">
      <div class="col-lg-12">

        <div class="a4">
          <table border="2" width="100%" cellpadding="100%">
              <!-- 1 -->
<tr>
                <td colspan="4">
                  <br/>

                 <h4><img id = "logo" src="img/logo.jpg" alt="" width="250"/> <center>  ใบเสร็จรับเงิน </center></h4>
                <br/> &nbsp;&nbsp;&nbsp;ที่อยู่ : มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ
                <br/> &nbsp;&nbsp;&nbsp;ภาควิชาวิทยาการคอมพิวเตอร์เทคโนโลยีและสารสนเทศ
                <br/> &nbsp;&nbsp;&nbsp;1518 Pracharat I Rd., Wongsawang Bangsue กรุงเทพมหานคร 10800

                <br/><br/>
                </td>

</tr>
              <!-- 2 -->
<tr>

              <td colspan="2">
              <pre style="  margin-bottom: 0px;">
      ชื่อ <?php echo $roww["mem_name"];?> นามสกุล <?php echo $roww["mem_surname"];?><br>
      บ้านเลขที่ <?php echo $roww["mem_address"];?> ถนน <?php echo $roww["mem_road"];?><br>
      เขต <?php echo $roww["mem_district"];?> แขวง <?php echo $roww["mem_subdistrict"];?><br>
      จังหวัด <?php echo $roww["mem_pro"];?> ประเทศ <?php echo $roww["mem_country"];?>
                </pre>
              </td>
              <td colspan="2">
                <pre style="  margin-bottom: 0px;">
     วันที่สั่งซื้อ <?php echo DATE('d : M : Y');?><br>



                  </pre>
              </td>

</tr>
              <!-- 3 -->
<tr width="213" cellpadding="186">

                <td >
                  <pre class = "pretest" style="  margin-bottom: 0px;" align='center'>
รหัสสินค้า

                    </pre>
                </td>

                <td >
                  <pre class = "pretest" style="  margin-bottom: 0px;" align='center'>
ชื่ออุปกรณ์

                    </pre>
                </td>

                <td >
                  <pre class = "pretest" style="  margin-bottom: 0px;" align='center'>
จำนวนอุปกรณ์

                    </pre>
                </td>
                <td >
                  <pre class = "pretest" style="  margin-bottom: 0px;" align='center'>
ราคา

                    </pre>
                </td>


  <?php
  //   if (!mysql_query($upCount)) {
  //   echo "<br/>Insert SQL Failed -> ".mysql_error()."</br>";
  //   //mysql_close($server);
  //   die();
  // }
  $total_price = 0;
  $num = 0;
  while ($meResult = @mysql_fetch_assoc($meQuery)){
      $key = array_search($meResult['Det_ID'], $_SESSION['cart']);
      $total_price = $total_price + ($meResult['Det_PRICE'] * $_SESSION['qty'][$key]);
      $countRe = $meResult['Det_COUNT']-$_SESSION['qty'][$key];
      $upCount = "UPDATE detail SET Det_COUNT ='".$countRe."' WHERE Det_ID ='".$meResult['Det_ID']."'";
      mysql_query($upCount);
      ?>
      <tr>
                <td >

                  <center><?php echo $meResult['Det_ID'];?></center>

                </td>

                <td >

                <center><?php echo $meResult['Det_NAME']; ?></center>

                </td>

                <td >

      <center><?php echo $_SESSION['qty'][$key]; ?></center>

                </td>
                <td >

<center><?php echo number_format(($meResult['Det_PRICE'] * $_SESSION['qty'][$key]),2); ?></center>

                </td>
      </tr>
  <?php
    $num++;

  }
  mysql_close();
  ?>

</tr>
          <!-- 4 -->

        <tr>
          <td colspan="4" align='right'>
            <h5>ราคารวม :  <?php echo number_format($total_price,2); ?>  บาท </h5>
          </td>
        </tr>

        </div>

        <!-- 5 -->

        <tr>
        <td colspan="4" >
          <pre style="  margin-bottom: 0px;" >

        ผู้ออกใบเสร็จ         ชื่อลูกค้า                                                  วันที่ออกใบเสร็จ
           <?php echo $rowww["emp_name"];?>          <?php echo $roww["mem_name"];?>                                                  <?php echo $rowwww["rep_date"];?>

        </td>
        </tr>

        </div>


        </table>
<br><br>

<center>
      <input type ="PRINT"class="btn btn-primary" id="print" value="PRINT" name="Submit">
      <input type ="PRINT" class="btn btn-primary" id="home" value="HOME" name="Submit">
      </div>
    </div>
  </div>

</center>

</center>
<?php
  unset($_SESSION['cart']);
  unset($_SESSION['qty']);
?>
</body>

</html>
