<?php
  //make a db connect
  $db = new mysqli("localhost", "root", "", "sqllab");
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

?>
