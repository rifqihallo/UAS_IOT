<?php 
include 'config.php';

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "INSERT INTO test (id, username, password) VALUES (NULL, '$username', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}