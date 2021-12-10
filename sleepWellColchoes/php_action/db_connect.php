<?php
  $servername = "";
  $usernamer = "root";
  $password = "";
  $dbname = "sleepWellColchoes";
  
  $connect = mysqli_connect($servername, $usernamer, $password, $dbname);

  mysqli_set_charset($connect, "utf8");  
?>
