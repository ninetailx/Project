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
    <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="js/login.js" charset="utf-8"></script>
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
            <br>  <br>

            <img id = "logologin"src="img/login.gif" a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"/>  <!-- login logo-->
                </center>
          </ul>
      </div>
      <!-- /#sidebar-wrapper -->




      <!-- Page Content -->
      <div id="page-content-wrapper"><!-- มันจะสร้างpaddingทุกด้าน 20 สร้างกรอบขึ้นมาให้ทุกอย่างยัดอยู่ในกรอบ มันจะไม่ไปสุดขอบมีกรอบล้อมรอบตัวเอง-->
              <div class="row"><!-- ครอบให้ทุกอันอยู่ในกรอบเดียวกันเรียงกันไปเป็นแถว-->
                  <div class="col-md-12">

                    <div class="section" id="logo" data-anchor="about"><!-- สร้างกรอบขึ้นมาให้ทุกอย่างยัดอยู่ในกรอบ ใส่พื้นหนังได้ -->
                          <div class="introduction text-center"><!-- ข้อความอยู่กลาง -->
                              <br/><br/>
                              <h1>COMPUTER REPAIR SYSTEM</h1>
                              <p style="font-size: 25px;">ให้บริการรวดเร็ว มีคุณภาพ</p>
                              <br/><br/>
                          </div>
                     </div>


                   <nav class="navbar navbar-inverse"><!-- ส่วนแถบเมนูทั้งหมด กำหนดกรอบลักษณะตัวหนังสือ-->
                       <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2"><!-- ทำให้มีแถบเล็กๆเวลาย่อ เลสบอน class ทำให้มีปุ่ม data ให้ข้อมูลออกมาจาก3แถบได้-->
                           <span class="icon-bar"></span><!-- กำหนดให้เป็นรูปอะไร -->
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                         </button>
                       </div>

                       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2"><!--ถ้าไม่มีเวลาย่อกดไม่ได้ class ทำให้ข้อมูลอยู่ในปุ่ม-->
                         <ul class="nav navbar-nav"><!-- เมนู -->
                           <!-- Page Content -->
                           <li role="presentation" ><a href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-th-list  "></span>&nbsp;&nbsp;MANU</a></li>
                           <!-- /#page-content-wrapper -->
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'home.php') !== FALSE) ? 'class="active"' : '' ?>><a href="home.php">HOME</a></li>
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'comset.php') !== FALSE) ? 'class="active"' : '' ?>><a href="comset.php">COMPUTER SET</a></li>
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'repair.php') !== FALSE) ? 'class="active"' : '' ?>><a href="repair.php">REPAIR</a></li>
                           <li role="presentation" <?php echo (strpos($_SERVER['PHP_SELF'], 'howtopay.php') !== FALSE) ? 'class="active"' : '' ?>><a href="howtopay.php">HOW TO PAY</a></li>
                         </ul>
                       </div>
                   </nav>


                        </div>
                    </div>

              <!-- end menu -->



              <!--start Modal login -->

            <div class="modal fade bs-example-modal-sm" id="modallgn"><!--class ให้ซ้อน-->
              <div class="modal-dialog modal-sm" role="document"><!--log ให้อยู่กลาง-->
                <div class="modal-content"><!--ตัวมันถ้าไม่ใส่จะใส-->

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--data คือสั่งให้ปิด-->
                    <h4 class="modal-title" id="myModalLabel">Form Login</h4>
                  </div>

                  <div class="modal-body">
                    <form id="login" method="post">
                      <center>
                      <img src = "img/l1.png" width = "150" height = "150"><br/>
                           <div class="form-group">
                               <div class="col-sm-12">
                                   <input class="form-control" id="username"name="username" type="text" placeholder = "Example@example.com"maxlength="25" onkeypress='if ((event.keyCode<64||event.keyCode>122)&&(event.keyCode<46||event.keyCode>59)) event.returnValue=false'>
                               </div>
                           </div><br/><br/>
                           <div class="form-group">
                               <div class="col-sm-12">
                                <input class="form-control" id="pwd" type="password" name="pwd" placeholder = "Enter Password"maxlength="10" onkeypress='if ((event.keyCode<65||event.keyCode>122)&&(event.keyCode<48||event.keyCode>59)) event.returnValue=false'>
                               </div>
                           </div><br/><br/>
                      </center>
                  </div>

                  <div class="modal-footer"><!-- ปุ่ม submit login -->
                    <img id = "logore" src="img/reicon.png" a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"/>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" id = "lgn" class="btn btn-primary">Login</button>
                  </div>
                    </form>

                </div>
              </div>
            </div>
                           <!--end Modal login-->

                           <!--start Modal Sing in -->
                           <div class="modal fade bs-example-modal-lg" id="modalregis">
                               <div class="modal-dialog modal-md" role="document">
                                   <div class="modal-content">

                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <h4 class="modal-title" id="myModalLabel">Sing In</h4>
                                       </div>

                                       <div class="modal-body">
                                           <form class="form-horizontal"id="regis"name="regis"method="post">
                                               <div class="form-group"><!-- มันจะจัดให้สวยให้เท่ากัน ถ้าใส่ทุกอันมันจะเรียงกันแถวเดียวยาวๆ ใส่อันเว้นอันเพื่อ 2 แถว แต่เวลาย่อมันจะพัง-->
                                                   <label class="col-sm-3 control-label">First Name:</label>
                                                       <div class="col-sm-8">
                                                           <input class="form-control" id="name" type="text" name="name" required placeholder = "Enter First Name"maxlength="15"onkeypress='if (event.keyCode<65||event.keyCode>122) event.returnValue=false'>
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label">Last Name:</label>
                                                       <div class="col-sm-8"><!-- กำหนดความยาวของช่องกรอกข้อมูล ไม่กำหนดพัง ยาวไปเกินกรอบ-->
                                                           <input class="form-control" id="surname" type="text" name="surname" required placeholder = "Enter Last Name"maxlength="20"onkeypress='if (event.keyCode<65||event.keyCode>122) event.returnValue=false'>
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label"><img src = "img/a1.png" width = "35" height = "35">Email:</label>
                                                       <div class="col-sm-8">
                                                           <input type="text" class="form-control" id="user" name="username" required placeholder="Enter Username"maxlength="40" onkeypress='if ((event.keyCode<64||event.keyCode>122)&&(event.keyCode<46||event.keyCode>59)) event.returnValue=false'>
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label">Password:</label>
                                                       <div class="col-sm-8">
                                                           <input class="form-control" id="pwds" type="password" name="pwd" placeholder = "Enter Password"maxlength="10"required onkeypress='if ((event.keyCode<65||event.keyCode>122)&&(event.keyCode<48||event.keyCode>59)) event.returnValue=false'>
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                    <label class="col-sm-3 control-label">Address:</label>
                                                        <div class="col-sm-8">
                                                           <input class="form-control" id="add" type="text" required name="add" placeholder = "Enter Address"maxlength="10"onkeypress='if (event.keyCode<45||event.keyCode>59) event.returnValue=false'>
                                                        </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label">Road:</label>
                                                       <div class="col-sm-8">
                                                           <input class="form-control" id="rd" type="text" required name="rd" placeholder = "Enter Road"maxlength="15">
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label">District:</label>
                                                       <div class="col-sm-8">
                                                           <input class="form-control" id="ds" type="text" required name="ds" placeholder = "Enter District"maxlength="15">
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label">Sub-Dist:</label>
                                                       <div class="col-sm-8">
                                                           <input class="form-control" id="sds" type="text" required name="sds" placeholder = "Enter Sub-Dist"maxlength="15">
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label">Province:</label>
                                                       <div class="col-sm-8">
                                                           <input class="form-control" id="pro" required type="text" name="pro" placeholder = "Enter Province"maxlength="15">
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label">Country:</label>
                                                       <div class="col-sm-8">
                                                           <input class="form-control" id="cty" type="text" required name="cty" placeholder = "Enter Country"maxlength="15">
                                                       </div>
                                               </div>
                                               <div class="form-group">
                                                   <label class="col-sm-3 control-label"><img src = "img/a5.png" width = "35" height = "35">Phone:</label>
                                                       <div class="col-sm-8">
                                                            <input class="form-control" id="tel" required type="tel" name="tel" placeholder = "0xx-xxx-xxxx"maxlength="12"maxlength="10"onkeypress='if (event.keyCode<45||event.keyCode>59) event.returnValue=false'>
                                                       </div>
                                               </div>

                                     </div>
                                               <div class="modal-footer">
                                                   <button type="reset" class="btn btn-danger">Reset</button>
                                                   <button type="submit" id ="reg"class="btn btn-primary">Submit</button>
                                               </div>

                                           </form>
                                   </div>
                               </div>
                           </div>
                           <!--end Modal Sing in -->

<script>
  function detail(detID){
    $.get('./pagelogin/querydetail.php?detID='+detID,function(data){
      document.getElementById("mydetail").innerHTML=data;
    });
  }
</script>
