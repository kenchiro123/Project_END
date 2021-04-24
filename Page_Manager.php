<!DOCTYPE html>
<html>

<head>
    <style>
        div {
            background-color: lightgrey;
            width: 300px;
            padding: 25px;
            border: 5px solid navy;
            margin: 25px;
            text-align: justify;
        }
        button{
            text-align: center;
        }
    </style>
</head>

<body>


    <div>
        <p>หากท่าต้องการเข้าใช่งานระบบต้องการขอสิทธิ์เข้าถึงก่อนนะจ๊ะ</p>
        <button  onclick="manager()" type="submit">ขอสิทธิ์</button>
    </div>
</body>
<script type="text/javascript">
  
    function manager() {

        window.location.assign("Page_Manager_Sent.php")

    }
</script>

</html>