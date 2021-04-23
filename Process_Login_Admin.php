

<?php
include('connect.php');
session_start();
$username = $_POST['emailAdmin'];     ///เป็นการpostมาจากช่อง Username จาก from
$password = $_POST['passAdmin'];     ///เป็นการpostมาจากช่อง password จาก from
$md5password = md5($password);      ///แปลงเป็นmd5



$sql = "SELECT * FROM admin where email = '$username' ";    /// ตัวแปร username  = ตัวแปรจากดาต้าเบส'$username' 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $sql = "SELECT * FROM admin where password = '$md5password'";  ///นำตัวแปร $md5password จากดาต้าเบส
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $_SESSION["login"]=true;                                     ///เป็นการสร้างsession 
    $_SESSION["email"] = $username;                           ///เป็นการสร้างsession โดยนำตัวแปร $username; จากดาต้าเบส
      
    
     header('Location:Page_Admin_Home.php');
    
  }
} else {
  include('Popup_Password_Not_Macth_Manager.php');            /// เป็นการเรียนใช้ popupInsystem_false.php จากที่อื่น
 
}

  }
} else {
  //include('popupNosystem.php');                 /// เป็นการเรียนใช้ popupNosystem.php จากที่อื่น
  
}


?>