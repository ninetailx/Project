$(document).ready(function(){
    $("#lgn").click(function(event){
      event.preventDefault();
      if($("#username").val()=="")
      {
        alert("PLEASE INPUT USERNAME !!");
        $('#username').focus();
        //ducument.getElementById("username").focus();
     }
     else if($("#pwd").val()=="")
     {
       alert("PLEASE INPUT PASSWORD !!");
       $('#pwd').focus();
       //ducument.getElementById("pwd").focus();
     }else{
            var odata = $('form#login').serialize();
            $.ajax({
              type:"POST",
              url:"backend/be_login.php",
              data:odata,
              success:function(data){
                if(data==1){
                  window.location='pagelogin/loginhome.php';
                  //$('html').load("pagelogin/loginhome.php");
                  alert("USER !!");
                  $("form#login")[0].reset();
                  $("#modallgn").modal('hide');
                }else if(data == 2){
                  alert("ADMIN !!");
                  $("#modallgn").modal('hide');
                  window.location='http://localhost/neno/newadmin_taex.php';
                  $("form#login")[0].reset();
                }
              },
              error: function(xhr,status,error) {
              alert("USERNAME OR PASSWORD WRONG !!");
              $("form#login")[0].reset();
              $("#modallgn").modal('show');
              }
            });
          }
    });
});

$(document).ready(function(){
    $("#reg").click(function(event){
      event.preventDefault();
      if($("#name").val()=="")
      {
        alert("PLEASE INPUT FIRSTNAME !!");
        $('#name').focus();
        //ducument.getElementById("username").focus();
     }
     else if($("#surname").val()=="")
     {
       alert("PLEASE INPUT SURNAME !!");
       $('#surname').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#user").val()=="")
     {
       alert("PLEASE INPUT USERNAME !!");
       $('#user').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#pwds").val()=="")
     {
       alert("PLEASE INPUT PASSWORD !!");
       $('#pwds').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#add").val()=="")
     {
       alert("PLEASE INPUT ADDRESS !!");
       $('#add').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#rd").val()=="")
     {
       alert("PLEASE INPUT ROAD !!");
       $('#rd').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#ds").val()=="")
     {
       alert("PLEASE INPUT DISTRICT !!");
       $('#ds').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#sds").val()=="")
     {
       alert("PLEASE INPUT SUB - DISTRICT !!");
       $('#sds').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#pro").val()=="")
     {
       alert("PLEASE INPUT PROVINCE !!");
       $('#pro').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#cty").val()=="")
     {
       alert("PLEASE INPUT COUNTRY !!");
       $('#cty').focus();
       //ducument.getElementById("pwd").focus();
     }
     else if($("#tel").val()=="")
     {
       alert("PLEASE INPUT TELEPHONE !!");
       $('#tel').focus();
       //ducument.getElementById("pwd").focus();
     }else{
            var odata = $('form#regis').serialize();
            $.ajax({
              type:"POST",
              url:"backend/be_register.php",
              data:odata,
              success:function(data){
                if(data==1){
                  $("#modalregis").modal('show');
                  alert("USERNAME ALREADY !!");
                  $("form#regis")[0].reset();
                }else {
                  alert("REGISTER SUCCESSFULLY !!");
                  $("#modalregis").modal('hide');
                  $("form#regis")[0].reset();
                }
              },
              error: function(xhr,status,error) {
                  alert("ERROR !!");
                  $("#modallgn").modal('show');
              }
            });
          }
    });
});
