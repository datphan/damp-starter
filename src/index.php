<?php
  $mysql_host = 'mysqldb';
  $mysql_user = 'root';
  $mysql_password = 'root';

  // Create connection
  $conn = new mysqli($mysql_host, $mysql_user, $mysql_password);
  echo 'Connected with ' . $conn->host_info;

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>DAMP: LAMP stack example</title>
</head>
<body>
  <h1>Hello world!</h1>
</body>
</html>