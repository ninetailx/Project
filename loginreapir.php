
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REPAIR</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css" media="screen" title="no title">
    <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
</head>

<body>
<script type="text/javascript">
$(document).ready(function(){
    $("#send").click(function(){

      if($("#county").val()=="")
      {
        alert("PLEASE INPUT TYPE !!");
        $('#country').focus();
        //ducument.getElementById("username").focus();
      }else if($("#symtoms").val()=="")
      {
        alert("PLEASE INPUT SYMTOMS !!");
        $('#symtoms').focus();
        //ducument.getElementById("username").focus();
      }else if($("#brand").val()=="")
      {
        alert("PLEASE INPUT BRAND !!");
        $('#brand').focus();
        //ducument.getElementById("username").focus();
      }else if($("#model").val()=="")
      {
        alert("PLEASE INPUT MODEL !!");
        $('#model').focus();
        //ducument.getElementById("username").focus();
      }else if($("#date").val()=="")
      {
        alert("PLEASE INPUT DATE !!");
        $('#date').focus();
        //ducument.getElementById("username").focus();
      }else if($("#time").val()=="")
      {
        alert("PLEASE INPUT TIME !!");
        $('#time').focus();
        //ducument.getElementById("username").focus();
      }else{
            var odata = $('form#inf').serialize();
            $.ajax({
              type:"POST",
              url:"../backend/be_inf_repair.php",
              data:odata,
              success:function(data){
                if(data==1){
                  $('#show').load("loginreapir.php");
                  alert("Successfully !!");
                  $("form#inf")[0].reset();
                }else {
                  alert("FAILED !!");
                }
              },
              error: function(xhr,status,error) {
                  alert('ERROR !!')
              }
            });
          }
  });
});

</script>
        <!-- start product -->
<div id="show">
  <?php require_once 'logintemp.php'; ?>
  <div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="row">
          <div class="col-md-12">
            <!-- อยู่กลาง แต่อยู่นอก nav -->
               <div class="bodyrepare">
                 <div class="selectrepare">
                   <center><img id="rabit" src="img/toon.gif" alt="" /></center>
                      
                        <br><br>
                          <form class="formrepare" id="inf" method="post">
                           <label <span class=”mandatory”>*</span> DEVICE TYPE </label>
                             <select id="country" name="type" placeholder = "Username">

                               <option>--PLEASE SELECT TYPE FOR REPAIR--</option>
                                 <option >COMPUTER (PC)</option>
                                   <option >NOTEBOOK</option>
                                     <option >ULTRARBOOK</option>
                                       <option >NETBOOK</option>
                                        <option >MACBOOK</option>
                                        </select>
                                         <br>
                                         <label for="fname">ORDER</label>
                                         <textarea placeholder="PLEASE INPUT OUT OF ORDER" id="symtoms" name="symtoms"></textarea>
                                         <br>
                                         <label for="fname">BRAND</label><br>
                                         <input type="textx" name="brand" id="brand" placeholder="EX. ASUS" onkeypress='if ((event.keyCode<65||event.keyCode>122)&&(event.keyCode<48||event.keyCode>59)) event.returnValue=false'>
                                         <label for="lname">MODEL</label>
                                          <input type="textx" name="model" id="model" placeholder="EX. P450JF" onkeypress='if ((event.keyCode<65||event.keyCode>122)&&(event.keyCode<48||event.keyCode>59)) event.returnValue=false'>
                                         <label for="lname">DATE</label>
                                         <input class="form-control" id="date" type="date" name="date" placeholder = "Date">
                                         <label for="lname">TIME</label>
                                         <input class="form-control" id="time" type="time" name="time" placeholder = "Time">
                                       </form>
                                     <br>
                                    <button type="submit"id="send" class="btn btn-primary"> SUBMIT </button>
                                    <button type="reset" class="btn btn-danger"> RESET </button>
                                   </div>
                                 </div>
                               </div>
                             </nav>
                           </div>
                         </div>
                       </div>
                     </div>
                     </div>






        <!-- /#page-content-wrapper -->


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
