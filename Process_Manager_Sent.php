<?php
include('connect.php');

$emailmanager = $_POST['emailmanager']; 
// echo $emailmanager 
$sql = "INSERT INTO manager_request (email_request,status_request,status_otp)
VALUES ('$emailmanager','false','false')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["email_requestl"] = $emailmanager;    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>