<?php
require("../backend/connect.php");
//session_start();

$meDet= "SELECT * FROM detail WHERE Det_ID = ".$_GET['detID'];
$meQueryDet = mysql_query($meDet);
$rowdt = mysql_fetch_array($meQueryDet);

?>




  <div class="thumbnail">
   <img src="img/<?php echo $rowdt['Det_IMG']; ?>">
   </div>
   <?php



        echo "<table>";


          echo "<tr>";
          echo "<td>NAME : </td><td>" .$rowdt["Det_NAME"]."</td>";
          echo "</tr>";
          echo "<tr></tr><td><br></td>";
          echo "<tr>";
          echo "<td>CPU : </td><td>" .$rowdt["Det_CPU"]."</td>";
          echo "</tr>";
          echo "<tr></tr><td><br></td>";
          echo "<tr>";
          echo "<td>MAINMEMORY : </td><td>" .$rowdt["Det_MAINMEMORY"]."</td>";
          echo "</tr>";
          echo "<tr></tr><td><br></td>";
          echo "<tr>";
          echo "<td>DISPLAY : </td><td>" .$rowdt["Det_DISPLAY"]."</td>";
          echo "</tr>";
          echo "<tr></tr><td><br></td>";
          echo "<tr>";
          echo "<td>HDMI : </td><td>" .$rowdt["Det_HDMI"]."</td>";
          echo "</tr>";
          echo "<tr></tr><td><br></td>";
          echo "<tr>";
          echo "<td>STORAGE : </td><td>" .$rowdt["Det_STORAGE"]."</td>";
          echo "</tr>";
          echo "<tr></tr><td><br></td>";
          echo "<tr>";
          echo "<td>OPTICALMEDIADRIVE : </td><td>" .$rowdt["Det_OPTICALMEDIADRIVE"]."</td>";
          echo "</tr>";
          echo "<tr></tr><td><br></td>";


      echo "</table>";
   ?>

  </div>
