<?php
  //make a db connect
  $db = new mysqli("localhost", "jarves", "9300", "sqllab");
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

?>
