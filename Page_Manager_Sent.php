<!DOCTYPE html>
<html>

<head>
    <style>
       form {
            background-color: lightgrey;
            width: 300px;
            padding: 25px;
            border: 5px solid navy;
            margin: 25px;
            text-align: center;
        }
        input{
            padding: 10px;
        }

        
    </style>
</head>

<body>

    <form action="Process_Manager_Sent.php" method="POST">
        <div>
            <h3>กรุณากรอกข้อมูล</h3>
            <input name="emailmanager" id="emailmanager" required placeholder="กรุณากรอก E-mail">
            
        </div>
        <br>
           <button type="submit">ขอสิทธิ์</button>
    </form>

</body>


</html>