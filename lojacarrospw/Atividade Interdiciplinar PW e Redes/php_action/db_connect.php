<?php
  //Conexão com Banco de dados
  $servername = "";
  $usernamer = "root";
  $password = "";
  $dbname = "lojaDeCouchao";
  
  $connect = mysqli_connect($servername, $usernamer, $password, $dbname);

  mysqli_set_charset($connect, "utf8");  
?>
