<?php
include('connect.php');
$email = $_GET['email'];
// echo $email;
session_start();
$sql = "UPDATE manager_request SET 	status_request='true' WHERE email_request= '$email' ";

if ($conn->query($sql) === TRUE) {
    header('Location: Page_Admin_Check_Access.php');
    include('Popup_Approve_set_email.php');  
    
} else {
  echo "Error updating record: 55555 " . $conn->error;
}

$conn->close();

?>