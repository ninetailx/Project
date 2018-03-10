<?php

    mysql_connect('localhost','taex','12345');
    mysql_select_db("project");
    mysql_query ("SET NAMES 'utf8'");

    $axResult = array();
      $date = date("Y-m-d");
      $idinf = $_POST['e_email'];
      $sql="select *
              from bill
              where inf_id='$idinf' " ;
      $data = mysql_query($sql);
      $row = mysql_fetch_array($data);
      // $billid = $row[0];
      // $billdate = $row[1];
      // $billtype = $row[2];
      // $repid = $row[3];
        if($data){
            $strSQL = "INSERT INTO sending (send_id,send_date,bill_id,inf_id,check_finish)
                        VALUES (
                                NULL,
                                '$date',
                                '".$row[0]."',
                                '".$row[6]."',
                                '0' ) ";
            $query = mysql_query($strSQL);
                if($query){
                      $sSql = "UPDATE bill
                                  SET check_send  = '1'
                                WHERE bill_id =  '".$row[0]."' ";
                      $Squery = mysql_query($sSql);
                      if($Squery){
                        $sSqlup = "UPDATE inf_repair
                                    SET inf_status	  = 'sending'
                                  WHERE inf_id =  '$row[6]' ";
                        $sSquery = mysql_query($sSqlup);
                        if($sSquery){
                            $axResult = array(
                                'success' => TRUE,
                                'real' => 'จัดส่งสำเร็จ+อัพสเตตัสได้'
                            );
                            echo json_encode($axResult);
                        }
                      } else {
                        $axResult = array(
                            'success' => FALSE,
                            'real' => 'ไม่ได้'
                        );
                        echo json_encode($axResult);
                      }
                }else{
                  $axResult = array(
                      'success' => FALSE,
                      'real' => 'ใส่ข้อมูลไม่เข้า',
                      'data' => $axDataCustomer
                  );
                  echo json_encode($axResult);
                }
        } else{
            $axResult = array(
                'success' => FALSE,
                'real' => 'ข้อมูลผิดพลาด'
            );
            echo json_encode($axResult);
        }//if



 ?>
