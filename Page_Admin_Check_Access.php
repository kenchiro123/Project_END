<?php
include('connect.php');
session_start();

$sql = "SELECT * FROM manager_request where status_request = 'false'  ";
$result = mysqli_query($conn, $sql);                      /// 4-9 เอาไว้แสดงข้อมูลจากฐานข้อมูล
while ($row = mysqli_fetch_array($result)) {
    $email_request[] = $row['email_request'];
    $status_request[] = $row['status_request'];
    $status_otp[] = $row['status_otp'];
}


mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        th {
            height: 20px;
        }

        table,
        div {
            border: 1px solid black;
            width: 400px;
            padding: 100px;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <a href="Page_Admin_Home.php"><button class="sub" id="submit">ย้อนกลับ</button></a>
    <div>
        <h2>คำขอสิทธิ์การเข้าใช้งานระบบ</h2>
        <table>

            <?php
            if (isset($email_request)) {
            ?>

  <!-- หัวตาราง -->
                <tr>
                    <th>ลำดับ</th>
                    <th>อีเมล</th>
                    <th>ยอมรับ</th>
                    <th>ไม่ยอมรับ</th>
                </tr>
<!-- --- -->


            <?php
            } else {
            ?>

<!-- ไม่มีคำขอ -->
                <h3 style='color:red'> ยังไม่มีคำขอ </h3>

<!-- --- -->
            <?php
            }
            ?>


            <?php
            if (isset($email_request)) {  //count นับจำนวนว่าArrry เท่าไหร่
                for ($i = 0; $i < count($email_request); $i++) {

                    echo '<tr>
                        <td> ' . ($i + 1) . '</td>
                        <td>
                        <asp:Label ID="email' . $i . '" >' . $email_request[$i] . '</asp:Label>                        
                        </td>
                        <td><button onclick="Approve(' . $i . ')">ยอมรับ</button></td>
                        <td><button onclick="reject(' . $i . ')">ไม่ยอมรับ</button></td>
                    </tr>';
                    // echo $email_request[$i];
                }
            }

            ?>
        </table>



    </div>

    <script>
        function Approve(a) {
            // var email = document.getElementById('*zigField4').text;
            //     console.log(email)
            var x = document.getElementById('email' + a + '').innerText;
            window.location.assign('Admin_Approve_Manager.php?email=' + x + ''); /// location.assin เป็นการเลือกไฟล์ไปหาpatsนั้น
        }

        function reject(email) {
            // var email = document.getElementById('*zigField4').text;
            //     console.log(email)
            var x = document.getElementById('email' + email + '').innerText;
            window.location.assign('Admin_Reject_Manager.php?email=' + x + ''); /// location.assin เป็นการเลือกไฟล์ไปหาpatsนั้น
        }
        // function Approve() {

        //     window.location.assign('Admin_Approve_Manager.php'); /// location.assin เป็นการเลือกไฟล์ไปหาpatsนั้น

        // }
    </script>
</body>



</html>