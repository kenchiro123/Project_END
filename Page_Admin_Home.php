<?php
include('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        div.d1 {
            background-color: lightgrey;
            width: 300px;
            padding: 25px;
            border: 5px solid navy;
            margin: 25px;
            text-align: center;
        }

        button {
            text-align: center;
        }
    </style>
</head>

<body>
<button onclick="logouts()" class="sub" id="submit" >ออกจากระบบ</button>

    <div class="d1">
        <div>

            
            <a href="Page_Admin_Check_Access.php"><button class="sub" id="submit" >ตรวจสอบคำขอสิทธิ์</button></a>
        </div>
        <br>
        <br>
        <div>

          
            <a href="Page_Admin_Manage_Access.php"><button class="sub" id="submit" >จัดการสิทธิ์</button></a>
        </div>
    </div>

</body>
<script type="text/javascript">
    function logouts() {

        window.location.assign("logout.php")

    }


</script>

    


</html>