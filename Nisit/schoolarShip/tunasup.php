<?php
session_start();
ob_start();
if ($_SESSION['login'] != "true") {
    header("HTTP/1.1 401 Unauthorized");
    header("Location: http://localhost/intern/nisit/loginNisit.php");
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="http:\\localhost\Intern\Nisit\resource\css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btnleft {
            width: 200px;
            height: 50px;
            font-size: x-large;
            margin-left: 300px;
        }

        .btnright {
            width: 200px;
            height: 50px;
            font-size: x-large;
            float: right;
            margin-right: 300px;
        }
    </style>
</head>

<body>
    <?php
    include "../resource/nav.php";
    ?>
    <div class="bigBox">
        <h1 style="text-align: center;">ทุนขาดแคลนทุนทรัพย์</h1><br>
        <hr>
        <div style="font-size: xx-large; margin-left: 50px;">
            <br>
            <a class="active" href="#home">รายละเอียดทุน</a> <br><br>
            <a href="#news">คุณสมบัติผู้สมัคร</a> <br><br>
            <a href="#news">หลักฐานการสมัคร</a> <br><br>
            <a href="#news">ขั้นตอนการสมัคร</a> <br><br>
            <a href="#news">ช่วงเวลา</a> <br><br><br><br>
        </div>
        
        <button class="btnleft"><a href="http:\\localhost\Intern\Nisit\schoolarShip\tunasupForm.php" >สมัคร</a></button>
        <button class="btnright">อัปโหลดเอกสาร</button>
    </div>
</body>

</html>