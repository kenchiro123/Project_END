<?php
include('connect.php');
session_start();
if(isset($_SESSION["login"])){
    header('Location: Page_Admin_Home.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
form {
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
    
    
}
input{
    width:300px;
    padding: 10px;
}
body{
    text-align: center;
}

        
</style>

</head>

<body>
    
    <form action="Process_Login_Admin.php" method="POST" >
    <h1 style="text-align: center;">เข้าสู่ระบบผู้ดูแล</h1>
        <h3>
        E-mail
        </h3>
        
        <div>
            <input type="text" name="emailAdmin" id="emailAdmin" required placeholder="E-mail">
        </div>
        <br>
        <h3>
        password
        </h3>
        
        <div>
            <input type="password" name="passAdmin" id="passAdmin" required placeholder="Password">
        </div>
       <br>
       <br> 
       <button class="sub" id="submit" >เข้าสู่ระบบ</button>
    </form>
 
</body>


</html>