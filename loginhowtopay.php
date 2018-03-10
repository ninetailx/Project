<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HOW TO PAY</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css" media="screen" title="no title">

    <style media="screen">
    /*--------------------------------jquery for conus&howtopay-------------------------------------*/

    pre {
      background: #fefefe;
      border: 1px solid #dedede;
      overflow-x: auto;
      padding: 2em;
    }

    ul {
      margin-left: 1em;
    }

    #nav{
      position:fixed;
      left: 245px;
      list-style: none;
      margin: 0;
      top: 405px;
      z-index: 100;
    }

    #nav li {
      margin-bottom: 2px;
    }

    #nav a {
      background: #ededed;
      color: #666;
      display: block;
      font-size: 14px;
      padding: 5px 10px;
      text-decoration: none;
      text-transform: uppercase;
    }

    #nav a:hover {
      background: #dedede;
    }

    #nav .current a {
      background: #666;
      color: #ededed;
    }

    #container {
      margin: 0;
    }

    h2{
      color: #ffffff
    }

    .section p:last-child {
      margin-bottom: 0;
    }
  </style>
</head>

<body>
  <?php require 'logintemp.php'; ?>


  <div class="section" id="section4"><!-- สร้างกรอบขึ้นมาให้ทุกอย่างยัดอยู่ในกรอบ ใส่พื้นหนังเป็นส่วนๆได้ได้ -->
      <div class="row">
        <br><br>
         <div class="col-sm-10 col-sm-offset-2" ><!--จะอยู่ตรงกลางพอดี col-sm-6 ให้แสดงครึ่งหนึ่ง col-sm-offset-0 จะอยู่ซ้ายมือสุด-->
           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

             <ul id="nav">
               <li class="current"><a href="#intro" >HOW TO PAY</a></li>
               <li><a href="#usage">MAP FOR YOU</a></li>
               <li class="current"><a href="#options">ABOUT ME</a></li>
               <li><a href="#examples">FACEBOOK</a></li>
             </ul>

             <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                 <img id = "picbg" src="img\gif5.gif" alt="" />
               </div>
             </div>
                             <div class="section" id="intro">
                              <h2>HOW TO PAY</h2>

                                <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                               <img id = "picbg" src="img\bank.png" alt="" />
                                <div class="panel panel-default">
                                </div>
                                </div>
                                <div class="panel-heading" role="tab" id="headingOne">
                               <img id = "picbg" src="img\promo.jpg" alt="" />
                                </div>
                                </div>


                             <div class="section" id="usage">
                               <h2>MAP FOR YOU</h2>
                               <nav class="navbar navbar-inverse">
                                 <iframe id= "map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874
                                 .3284863014514!2d100.51214481407568!3d13.819303299450647!2m3!1f0!2
                                 f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b9c2071065f%3A0xaad4af9da5
                                 efa4e5!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LmC4LiZ4LmC4L
                                 il4Lii4Li14Lie4Lij4Liw4LiI4Lit4Lih4LmA4LiB4Lil4LmJ4Liy4Lie4Lij4Liw4LiZ4LiE4Lij4LmA4
                                 Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1477574091951"
                                 width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                               </nav>
                               </div>


                             <div class="section" id="options">
                               <h2>ABOUTME</h2>


                               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                 <div class="panel panel-default">
                                   <div class="panel-heading" role="tab" id="headingOne">
                                     <h4 class="panel-title">
                                       <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                         <center> <img src="img/icon.png" alt=""  class="icon"/></center>
                                       </a>
                                     </h4>
                                   </div>
                                   <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                     <div class="panel-body">
                                       <!-- object 1-->
                                       <nav class="navbar navbar-inverse">
                                         <img id ="picbg" src="img/gif2.gif"  alt="" />
                                       </nav>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>



                             <div class="section" id="examples">
                               <h2>FACEBOOK</h2>
                                     <nav class="navbar navbar-inverse">
                                       <div class="row">
                                           <div class="col-sm-12 col-md-4">
                                           <div class="thumbnail">
                                             <img class="picus" src="img/march.jpg">
                                             <div class="caption">
                                               <h3>Captain March</h3>
                                               <p><a href="https://www.facebook.com/marchnatkamon?fref=ts" target= "_blank" class="btn btn-primary" role="button">FACEBOOK</a></p>
                                             </div>
                                           </div>
                                         </div>
                                         <div class="col-sm-12 col-md-4">
                                           <div class="thumbnail">
                                             <img  class="picus" src="img/jeff.jpg">
                                             <div class="caption">
                                               <h3>Assistant Jeff</h3>
                                               <p><a href="https://www.facebook.com/ItsJefffy?ref=ts&fref=ts" target= "_blank" class="btn btn-primary" role="button">FACEBOOK</a></p>
                                             </div>
                                           </div>
                                         </div>
                                         <div class="col-sm-12 col-md-4">
                                           <div class="thumbnail">
                                             <img class="picus" src="img/pasan.jpg">
                                             <div class="caption">
                                               <h3>Assistant Nino</h3>
                                               <p><a href="https://www.facebook.com/pasannono?fref=ts" target= "_blank" class="btn btn-primary" role="button">FACEBOOK</a></p>
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                                       <div class="row">
                                         <div class="col-sm-12 col-md-4">
                                           <div class="thumbnail">
                                             <img class="picus" src="img/tae.jpg">
                                             <div class="caption">
                                               <h3>Employee Tae</h3>
                                               <p><a href="https://www.facebook.com/casstletae" target= "_blank" class="btn btn-primary" role="button">FACEBOOK</a></p>
                                             </div>
                                           </div>
                                         </div>
                                         <div class="col-sm-12 col-md-4">
                                           <div class="thumbnail">
                                             <img class="picus" src="img/vac.jpg">
                                             <div class="caption">
                                               <h3>Employee Vac</h3>
                                               <p><a href="https://www.facebook.com/thodsapol.janurai.1?fref=ts" target= "_blank" class="btn btn-primary" role="button">FACEBOOK</a></p>
                                             </div>
                                           </div>
                                         </nav>

                           <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
                           <!--[if gt IE 8]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script><!--<![endif]-->
                           <script src="js/jquery.nav.js"></script>
                           <script>
                             $(document).ready(function() {
                               $('#nav').onePageNav();
                             });
                           </script>

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
