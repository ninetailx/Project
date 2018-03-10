<?php
  include("../backend/connect.php");
	//*** Get User Login
  session_start();
  if(!isset($_SESSION['UserEmail'])) {
  header('Location: ../home.php');
  die();
  }
	$sql = "SELECT * FROM member WHERE mem_email = '".$_SESSION['UserEmail']."' ";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result,MYSQLI_ASSOC);


  // ซื้อของ
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
// ลง Order
  $_SESSION['formid'] = sha1(microtime());
?>
  <div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <center>
            <li class="sidebar-brand">
              <br>
              <img  src="img/B0.png"  alt="" />

              <img id="picrip" src="img/B1.png"  alt="" />

              <!--start Scroll Drawing -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.6 107.6" id="star-svg">
    <path fill="none" stroke="#999999" stroke-width="2" id="star-path"
    d="M43.7,65.8L19.9,83.3c-2.9,1.9-5.1,3.2-7.9,3.2c-5.7,0-10.5-5.1-10.5-10.8
    c0-4.8,3.8-8.2,7.3-9.8l27.9-12L8.8,41.4c-3.8-1.6-7.3-5.1-7.3-9.8c0-5.7,5.1-10.5,10.8-10.5c2.9,0,4.8,1,7.6,3.2l23.8,17.4
    l-3.2-28.2c-1-6.7,3.5-12,9.8-12c6.3,0,10.8,5.1,9.8,11.7L57,41.8l23.8-17.4c2.9-2.2,5.1-3.2,7.9-3.2c5.7,0,10.5,4.8,10.5,10.5
    c0,5.1-3.5,8.2-7.3,9.8L63.9,53.8l27.9,12c3.8,1.6,7.3,5.1,7.3,10.1c0,5.7-5.1,10.5-10.8,10.5c-2.5,0-4.8-1.3-7.6-3.2L57,65.8
    l3.2,28.2c1,6.7-3.5,12-9.8,12c-6.3,0-10.8-5.1-9.8-11.7L43.7,65.8z"/>

  </svg>
    <style media="screen">
      .user{
        font-family: monospace;
        font-weight: bold;
        font-size: 24px;
        color: white;
        margin: 0 auto;
      }
    </style>
    <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script type="text/javascript">
     // Get a reference to the <path>
    var path = document.querySelector('#star-path');

     // Get length of path... ~577px in this case
    var pathLength = path.getTotalLength();

     // Make very long dashes (the length of the path itself)
    path.style.strokeDasharray = pathLength + ' ' + pathLength;

     // Offset the dashes so the it appears hidden entirely
    path.style.strokeDashoffset = pathLength;

     // Jake Archibald says so
     // https://jakearchibald.com/2013/animated-line-drawing-svg/
    path.getBoundingClientRect();

     // When the page scrolls...
    window.addEventListener("scroll", function(e) {

     // What % down is it?
     // https://stackoverflow.com/questions/2387136/cross-browser-method-to-determine-vertical-scroll-percentage-in-javascript/2387222#2387222
     // Had to try three or four differnet methods here. Kind of a cross-browser nightmare.
    var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

     // Length to offset the dashes
    var drawLength = pathLength * scrollPercentage;

     // Draw in reverse
    path.style.strokeDashoffset = pathLength - drawLength;

     // When complete, remove the dash array, otherwise shape isn't quite sharp
     // Accounts for fuzzy math
    if (scrollPercentage >= 0.99) {
    path.style.strokeDasharray = "none";

    } else {
    path.style.strokeDasharray = pathLength + ' ' + pathLength;
    }

    });
    </script>

          <!--end Scroll Drawing -->
          </li>
          <div class="user" align="center">
              <center>Username</center>
              <center><?php echo $row["mem_name"];?></center>
              <br>
          </div>
          <a href="./backend/be_logout.php">  <img src="../pagelogin/img/logoutt.png" id = "logologin" alt=""  /></a>  <!-- logout logo-->
                </center>
          </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">

                    <div class="section" id="logo" data-anchor="about"><!-- สร้างกรอบขึ้นมาให้ทุกอย่างยัดอยู่ในกรอบ ใส่พื้นหนังได้ -->
                          <div class="introduction text-center">
                              <br/><br/>
                              <h1>COMPUTER REPAIR SYSTEM</h1>
                              <p style="font-size: 25px;">ให้บริการรวดเร็ว มีคุณภาพ</p>
                              <br/><br/>
                          </div>
                     </div>


                   <nav class="navbar navbar-inverse">
                     <div class="container-fluid">
                       <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"><!-- ทำให้มีแถบเล็กๆเวลาย่อ -->
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                         </button>
                       </div>

                       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                         <ul class="nav navbar-nav"><!-- เมนู -->
                           <!-- Page Content -->
                           <li role="presentation" ><a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-th-list  "></span>&nbsp;MENU</a></li>
                           <!-- /#page-content-wrapper -->
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'loginhome.php') !== FALSE) ? 'class="active"' : '' ?>><a href="loginhome.php">HOME</a></li>
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'logincomset.php') !== FALSE) ? 'class="active"' : '' ?>><a href="logincomset.php">COMPUTER SET</a></li>
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'loginreapir.php') !== FALSE) ? 'class="active"' : '' ?>><a href="loginreapir.php">REPAIR</a></li>
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'loginhowtopay.php') !== FALSE) ? 'class="active"' : '' ?>><a href="loginhowtopay.php">HOW TO PAY</a></li>
                         </ul>
                         <ul class="nav navbar-nav navbar-right"><!-- ซ้ายสุด -->
                           <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSACTION<span class="caret"></span></a>
                             <ul class="dropdown-menu" >
                               <li><a href=""data-toggle="modal" data-target="#myModals"><span class="glyphicon glyphicon-euro"></span>&nbsp;PAY REPAIRS</a></li>
                               <li><a href=""data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;DETAIL REPAIRS</a></li>
                               <?php if ($meQty != 0) { ?>
                                 <li><a href=""data-toggle="modal" data-target="#myCart"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;MY CART<span class="badge"><?php echo $meQty; ?></span></a></li>
                               <?php }else { ?>
                                 <li><a onclick="myStock()"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;MY CART<span class="badge"><?php echo $meQty; ?></span></a></li>
                               <?php } ?>
                               <!--<li><a href=""data-toggle="modal" data-target="#myCart"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;MY CART<span class="badge"><?php echo $meQty; ?></span></a></li>-->
                             </ul>
                           </li>
                         </ul>
                       </div>
                     </div>
                   </nav>
                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel">Detail Repairs</h4>
                           </div>
                           <div class="modal-body">
                             <?php
                             $sqll = "SELECT * FROM inf_repair WHERE mem_email = '".$_SESSION['UserEmail']."'";
                             $resultt = mysql_query($sqll);

                           echo "<table>";
                                   while ($roww = mysql_fetch_array($resultt)) {
                                     echo "<tr>";
                                     echo "<td>MACHINE TYPE : </td><td>" .$roww["inf_type"]."</td>";
                                     echo "</tr>";
                                     echo "<tr></tr><td><br></td>";
                                     echo "<tr>";
                                     echo "<td>SYMTOMS : </td><td>" .$roww["inf_symtoms"]."</td>";
                                     echo "</tr>";
                                     echo "<tr></tr><td><br></td>";
                                     echo "<tr>";
                                     echo "<td>BRAND : </td><td>" .$roww["inf_brand"]."</td>";
                                     echo "</tr>";
                                     echo "<tr></tr><td><br></td>";
                                     echo "<tr>";
                                     echo "<td>MODEL : </td><td>" .$roww["inf_model"]."</td>";
                                     echo "</tr>";
                                     echo "<tr></tr><td><br></td>";
                                     echo "<tr>";
                                     echo "<td>DATE : </td><td>" .$roww["inf_date"]."</td>";
                                     echo "</tr>";
                                     echo "<tr></tr><td><br></td>";
                                     echo "<tr>";
                                     echo "<td>TIME : </td><td>" .$roww["inf_time"]."</td>";
                                     echo "</tr>";
                                     echo "<tr></tr><td><br></td>";
                                     echo "<tr>";
                                     echo "<td>STATUS : </td><td>" .$roww["inf_status"]."</td>";
                                     echo "</tr>";
                                     echo "<tr></tr><td><br></td>";
                                   }
                                   echo "</table>";
                                ?>


                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="modal fade" id='myModals' tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                         <div class="modal-dialog" role="document">
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title" id="myModalLabel">PAY REPAIR</h4>
                             </div>
                             <div class="modal-body">
                               <?php
                               $sqlll = "SELECT * FROM inf_repair WHERE inf_status = 'bill' and mem_email = '".$_SESSION['UserEmail']."' ";
                               $resulttt = mysql_query($sqlll);

                             echo "<table>";
                                     while ($rowww = mysql_fetch_array($resulttt)) {
                                       echo "<tr>";
                                       echo "<td>MACHINE TYPE : </td><td>" .$rowww["inf_type"]."</td>";
                                       echo "</tr>";
                                       echo "<tr></tr><td><br></td>";
                                       echo "<tr>";
                                       echo "<td>SYMTOMS : </td><td>" .$rowww["inf_symtoms"]."</td>";
                                       echo "</tr>";
                                       echo "<tr></tr><td><br></td>";
                                       echo "<tr>";
                                       echo "<td>BRAND : </td><td>" .$rowww["inf_brand"]."</td>";
                                       echo "</tr>";
                                       echo "<tr></tr><td><br></td>";
                                       echo "<tr>";
                                       echo "<td>MODEL : </td><td>" .$rowww["inf_model"]."</td>";
                                       echo "</tr>";
                                       echo "<tr></tr><td><br></td>";
                                       echo "<tr>";
                                       echo "<td>DATE : </td><td>" .$rowww["inf_date"]."</td>";
                                       echo "</tr>";
                                       echo "<tr></tr><td><br></td>";
                                       echo "<tr>";
                                       echo "<td>TIME : </td><td>" .$rowww["inf_time"]."</td>";
                                       echo "</tr>";
                                       echo "<tr></tr><td><br></td>";
                                       echo "<tr>";
                                       echo "<td>PRICE : </td><td>" .number_format($rowww["inf_price"],2)." ฿</td><td><a href='' id='".$rowww['inf_id']."' class='pay'><span class='glyphicon glyphicon-euro'></span>&nbsp;PAY</a></td></td>";
                                       echo "</tr>";
                                       echo "<tr></tr><td><br></td>";
                                     }
                                     echo "</table>";
                                  ?>
                             </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-danger" id="mod1"data-dismiss="modal">CLOSE</button>
                             </div>
                           </div>
                         </div>
                       </div>

                        </div>
                    </div>
                    <!-- modal mycart -->
    <div class="modal fade" id="myCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">My cart</h4>
            </div>
            <!-- from -->
            <form action="updateorder.php" method="post" name="formupdate" role="form" id="formupdate" onsubmit="JavaScript:return updateSubmit();">
            <div class="modal-body">
              <!--test-->
              <?php
              $total_price = 0;
              $num = 0;
              //if($meCount > 0){
              echo "<table>";
              while ($meResult = @mysql_fetch_assoc($meQuery))
              {
                  $key = array_search($meResult['Det_ID'], $_SESSION['cart']);
                  $total_price = $total_price + ($meResult['Det_PRICE'] * $_SESSION['qty'][$key]);
                  ?>
                  <?php
                  echo "<tr>";
                  echo "<td>NAME : </td><td>" .$meResult['Det_NAME']."</td>";
                  echo "</tr>";
                  echo "<tr></tr><td><br></td>";
                  echo "<tr>";
                  echo "<td>QUANTITY : </td><td>" .$_SESSION['qty'][$key]."</td>";
                  echo "</tr>";
                  echo "<tr></tr><td><br></td>";
                  echo "<tr>";
                  echo "<td>PRICE : </td><td>".number_format(($meResult['Det_PRICE'] * $_SESSION['qty'][$key]),2)."</td>";
                  echo "</tr>";
                  echo "<tr></tr><td><br></td>";
                  echo "<tr>";
                  echo "<td>";
                  ?>
                  <input type="hidden" name="qty[]" value="<?php echo $_SESSION['qty'][$key]; ?>" />
                   <input type="hidden" name="detail_id[]" value="<?php echo $meResult['Det_ID']; ?>" />
                    <input  type="hidden" name="product_price[]" value="<?php echo $meResult['Det_PRICE']; ?>" />
                  <a class="btn btn-danger" href="removecart.php?itemId=<?php echo $meResult['Det_ID']; ?>" role="button">
                      <span class="glyphicon glyphicon-trash"></span>
                      ลบทิ้ง</a>
                  <?php
                  echo "</td>";
                  echo "</tr>";
                  $num++;
              }
              echo "</table>";
        //    }
              ?>
            <!--Xtest-->
            </div>
            <div class="modal-footer">

              <p>จำนวนเงินรวมทั้งหมด <?php echo number_format($total_price,2); ?> บาท</p>
              <form action="updateorder.php" method="post" name="formupdate" role="form" id="formupdate" onsubmit="JavaScript:return updateSubmit();">
              <input type="hidden" name="formid" value="<?php echo $_SESSION['formid']; ?>"/>
              <button type="submit" class="btn btn-danger" role="button">BUY NOW</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" >CLOSE</button>

            </div>
          </form>
        </div>
      </div>
    </div>
              <!-- end menu -->



              <!--start Modal login -->


                           <!--end Modal login-->

                           <!--start Modal Sing in -->

                           <!--end Modal Sing in -->
<script>
  $(function(){
	$(".pay").click(function(event){

    event.preventDefault();
		var edit_email=$(this).attr("id");
    var info ='e_email='+edit_email;
  		$.ajax({
  			type:"POST",
  			url:"./newadmin_pay.php",
        dataType : 'json',
        data:info,
  			success:function(result){
            if(result.success){
                alert('ชำระเงินเรียบร้อยแล้ว !!');
                //window.Location='http://localhost/comrpr/pagelogin/fin.php';
                $('html').load('../pagelogin/Fin.php');

            }else{
                alert('ทำไรไม่ได้เลย');
            }

  			}
  		});
	return false;
	 });
  });

    function detail(detID){
      $.get('querydetail.php?detID='+detID,function(data){
        document.getElementById("mydetail").innerHTML=data;
      });
    }

  function myStock() {
    alert('ไม่มีสินค้า');
  }
</script>
