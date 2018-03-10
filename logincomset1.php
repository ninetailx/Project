<?php
  include("../backend/connect.php");
  $meSqll = "SELECT * FROM detail ";
  $meQueryy = mysql_query($meSqll);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COMPUTER SET</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css" media="screen" title="no title">
</head>

<body>
  <?php require 'logintemp.php'; ?>

                        <!-- start product -->
                           <!-- เริ่มใส่รูปประเภท-->

                           <?php
                           while ($meResultt = mysql_fetch_assoc($meQueryy))
                           {
                              //  array_push($resultArray,$meResult['Det_ID']);
                              if(strcmp($meResultt['Det_TYPE'],'1')==0){
                               ?>
                               <div class="col-sm-4 col-md-6">
                                  <div class="thumbnail">
                                      <img src="img/<?php echo $meResultt['Det_IMG']; ?>">
                                          <div class="caption">
                                              <h3><?php echo $meResultt['Det_NAME']; ?></h3>
                                              <?php if ($meResultt['Det_COUNT'] != 0) {
                                                ?>
                                                <a href="updatecart1.php?itemId=<?php echo $meResultt['Det_ID']; ?>" class="btn btn-danger" role="button">BUY NOW</a>
                                                <?php
                                              }else {
                                                ?>
                                                <a href="#" onclick="myStock()" class="btn btn-danger" role="button">BUY NOW</a>
                                                <?php
                                              } ?>
                                              <a href="#" data-toggle="modal" data-target="#myDetail" class="btn btn-warning" role="button" onclick="detail('<?php echo $meResultt['Det_ID']; ?>')">DETAIL </a>
                                          </div>
                                  </div>
                               </div>
                               <?php
                             }
                             }
                             ?>
          <!-- end menu -->
          <!-- modal detail -->

          <div class="modal fade" id='myDetail' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail</h4>
                  </div>
                  <div class="modal-body">
                    <div class="modal-body" id="mydetail">
                    <!-- detail AJAX kub -->
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="mod1"data-dismiss="modal">CLOSE</button>
                  </div>
                </div>
              </div>
            </div>

          <!-- ///////////medal detail -->





        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(march) {
        march.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
