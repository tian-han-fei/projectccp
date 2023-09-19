<?php
  $servername = "localhost";
  $username = "id21284480_troyhtian";
  $password = "Troyandalan123!";
  $dbname = "id21284480_troyandalandatabase";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>
