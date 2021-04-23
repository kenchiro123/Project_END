<?php
include('connect.php');
$email = $_GET['email'];
// echo $email;
session_start();
$sql = "DELETE FROM manager_request  WHERE email_request= '$email' ";

if ($conn->query($sql) === TRUE) {
    header('Location: Page_Admin_Check_Access.php');
} else {
  echo "Error delete record: " . $conn->error;
}

$conn->close();
?>