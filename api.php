<?php
include "db.php";

$action = $_POST['action'];

if ($action == "fetch") {
  $result = $conn->query("SELECT * FROM students");
  $data = [];

  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }

  echo json_encode($data);
}

if ($action == "insert") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $conn->query("INSERT INTO students (name, email) VALUES ('$name', '$email')");
}

if ($action == "delete") {
  $id = $_POST['id'];
  $conn->query("DELETE FROM students WHERE id=$id");
}

if ($action == "update") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $conn->query("UPDATE students SET name='$name', email='$email' WHERE id=$id");
}
?>