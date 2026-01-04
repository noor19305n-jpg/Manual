<?php
$conn = new mysqli("localhost", "root", "", "ajax_crud");

if ($conn->connect_error) {
  die("Connection failed");
}
?>
