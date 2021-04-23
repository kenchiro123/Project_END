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
    
    <form action="loginAdmin.php" method="POST" >
   
        <h3>
        กรอกรหัสผ่าน
        </h3>
        
        <div>
            <input name="emailAdmin" id="email" required placeholder="กรอกรหัสผ่าน">
        </div>
        <br>
        <h3>
        ยืนยันรหัสผ่าน
        </h3>
        
        <div>
            <input name="passAdmin" id="password" required placeholder="ยืนยันรหัสผ่าน">
        </div>
       <br>
       <br> 
       <button class="sub" id="submit" >บันทึก</button>
    </form>
 
</body>

</html>