<?php
session_start();
				//connection
                  include("connect.php");
				//รับค่า user & password
                  $email = $_POST['username'];
                  $password = $_POST['pwd'];
				//query
                  $sql="SELECT * FROM member Where mem_user ='".$email."' and mem_password='".$password."' ";
                  $result = mysql_query($sql);
				        if(mysql_num_rows($result)==1){
                     $row = mysql_fetch_array($result);
                     $_SESSION["UserEmail"] = $row["mem_user"];
                     $_SESSION["UserPassword"] = $row["mem_password"];
                     echo "1";
                  }else{
                    $sql1="SELECT * FROM employee Where emp_email ='".$email."' and emp_password='".$password."' ";
                    $result1 = mysql_query($sql1);
                    if (mysql_num_rows($result1)==1) {
                      $row = mysql_fetch_array($result1);
                      $_SESSION["UserEmail"] = $row["emp_email"];
                      $_SESSION["UserPassword"] = $row["emp_password"];
                      echo "2";
                    }
                  }

?>
