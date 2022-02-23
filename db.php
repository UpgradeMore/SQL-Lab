<?php
  //make a db connect
  $db = new mysqli("localhost", "sqllab", "juUGHUQVHanpCxAs", "sqllab");
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

?>
