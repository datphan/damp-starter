<?php
  $mysql_host = getenv('MYSQL_HOST');
  $mysql_user = 'root';
  $mysql_password = 'root';

  // Create connection
  $conn = new mysqli($mysql_host, $mysql_user, $mysql_password);
  echo '<p style="text-align: center;">Connected with ' . $conn->host_info . '</p>';

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $conn->close();

  phpinfo(); 
?>