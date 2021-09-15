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
            margin-left: 20%;
        }

        .btnright {
            width: 200px;
            height: 50px;
            font-size: x-large;
            float: right;
            margin-right: 20%;
        }

        h1 {
            display: block !important;
            font-size: 36px !important;
            font-weight: bold;
        }

        h2 {
            display: block !important;
            font-size: 26px !important;
            font-weight: bold;
        }

        p {
            font-size: 18px !important;
        }

        .Textcontainer {
            border: 2px solid #ccc;
            padding: 10px;
            width: 20em;
        }

        .itemTxt {
            width: -moz-fit-content;
            width: fit-content;
            background-color: #8ca0ff;
            padding: 5px;
            margin-bottom: 1em;
        }
    </style>
</head>

<body>
    <?php
    include "../resource/nav.php";
    ?>
    <div class="bigBox" style=" ">
        <h1 style="text-align: center;">ทุนขาดแคลนทุนทรัพย์</h1><br>
        <hr>
        <div class="" style="font-size: xx-large; margin-left: 50px ;display: inline-block; display: table-row;
">
            <br>
            <!-- <a class="active" href="#home">รายละเอียดทุน</a> <br><br>
            <a href="#news">คุณสมบัติผู้สมัคร</a> <br><br>
            <a href="#news">หลักฐานการสมัคร</a> <br><br>
            <a href="#news">ขั้นตอนการสมัคร</a> <br><br>
            <a href="#news">ช่วงเวลา</a> <br><br><br><br> -->
            <!-- <div style="display: inline-block"> -->
            <div class="">
                

                <!-- <h1>ทุนขาดแคลนทุนทรัพย์</h1> -->
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คณะวิทยาศาสตร์ ศรีราชา ได้ตระหนักถึงความสำคัญในการพัฒนาศักยภาพและเสริมสร้างประสบการณ์การทำงานของนิสิตตามแนวทางการพัฒนาคุณภาพบัณทิตของคณะ วิทยาศาสตร์ศรีราชา โดยความเห็นชอบของคณะกรรมการกองทุนคณะ วิทยาศาสตร์ ศรีราชา มีจำนวนเงินทุน 12,000 บาท
                    <br>
                </p>
                <h2>คุณสมบัติ ผู้สมัคร</h2>
                <p>1 . เป็นนิสิตที่กำลังศึกษาอยู่ในระดับปริญญาตรี คณะวิทยาศาสตร์ ศรีราชา ทุกชั้นปี ได้คะแนนเฉลี่ยสะสม 2.00 ขึ้นไป<br>
                    (ยกเว้นนิสิตชั้นปีที่ 1 ไม่พิจารณาคะแนนเฉลี่ยสะสม)<br>
                    2. เป็นนิสิตที่กำลังศึกษาในระดับปริญญาโท คณะวิทยาศาสตร์ ศรีราชา ได้คะแนนเฉลี่ยสะสม 3.00 ขึ้นไป<br>
                    3. เป็นผู้ขาดแคลนทุนทรัพย์<br>
                    4. เป็นนิสิตที่มีความประพฤติดี สุภาพเรียบร้อย ไม่เคยมีประวัติการทำผิดวินัยนิสิต ตามข้อบังคับว่าด้วยการศึกษา ระดับปริญญาตรี และ ระดับ บัณทิตศึกษา มหาวิทยาลัย เกษตรศาสตร์ พ.ศ. 2559<br>
                    5. กรอกและยื่นแบบฟอร์ม และ เอกสารประกอบให้ถูกต้องครบถ้วนตามวันและเวลาที่คณะกรรมการกำหนด<br>
                    6. หากนิสิตได้รับทุน จะต้องรักษาผลการเรียนให้อยู่ในระดับที่กำหนด หรือดีขึ้น<br></p>
                <h2>หลักฐานการสมัคร</h2>
                <p>
                    1. ใบสมัครขอรับทุนฯ<br>
                    2. เรียงความเกี่ยวกับประวัติของตนเองโดยระบุถึงเหตุผลความจำเป็นในการขอรับทุนการศึกษา<br>
                    3. สำเนาบัตรประจำตัวนักศึกษา<br>
                    4. สำเนาทะเบียนบ้าน<br>
                    5. หนังสือรับรองเงินเดือนหรือรับรองรายได้ของผู้ปกครอง<br>
                    6. ผลการเรียนเฉลี่ยสะสมปีล่าสุด<br>
                    7. หลักฐานการเข้าร่วมกิจกรรมเสริมหลักสูตรของมหาวิทยาลัย (Activity Transcript)<br>
                    8. สำเนาบัญชีธนาคารไทยพานิชย์ จำกัด (มหาชน) ที่มีชื่อของนักศึกษา<br>
                </p>
                <h2>ขั้นตอนการสมัครทุน</h2>
                <p>1. ให้ผู้ขอรับทุนการศึกษาส่งใบสมัครที่กรอกข้อมูลครบถ้วน พร้อมแนบหลักฐานการสมัครดังต่อไปนี้ ต่องานการศึกษา หรืองานกิจการนักศึกษา หรือหน่วยงานอื่นใดที่รับผิดชอบเกี่ยวกับทุนการศึกษาของส่วนงานที่สังกัด<br>
                    2. ให้ส่วนงาน ดำเนินการตรวจสอบคุณสมบัติของผู้ขอรับทุนการศึกษาในเบื้องต้น ตามข้อ ๔ และรวบรวมใบสมัคร หลักฐานการสมัคร พร้อมทั้งผลการตรวจสอบคุณสมบัติ ส่งไปยังกองกิจการนักศึกษา<br>
                    3. ให้กองกิจการนักศึกษารวบรวมใบสมัครของผู้ขอรับทุนการศึกษาจากทุกส่วนงาน เสนอคณะอนุกรรมการเพื่อพิจารณาคัดเลือกผู้สมควรได้รับทุนการศึกษาต่อไป<br>
                </p>
                <h2>หลักฐานการสมัคร</h2>
                <p>


                    1. ใบสมัครขอรับทุนฯ<br>
                    2.เรียงความเกี่ยวกับประวัติของตนเองโดยระบุถึงเหตุผลความจำเป็นในการขอรับทุนการศึกษา<br>
                    3. สำเนาบัตรประจำตัวนักศึกษา<br>
                    4. สำเนาทะเบียนบ้าน<br>
                    5. หนังสือรับรองเงินเดือนหรือรับรองรายได้ของผู้ปกครอง<br>
                    6. ผลการเรียนเฉลี่ยสะสมปีล่าสุด<br>
                    7. หลักฐานการเข้าร่วมกิจกรรมเสริมหลักสูตรของมหาวิทยาลัย (Activity Transcript)<br>
                    8.สำเนาบัญชีธนาคารไทยพานิชย์ จำกัด (มหาชน) ที่มีชื่อของนักศึกษา<br>
                    9. หนังสือรับรองรายได้ของผู้ปกครอง<br>
                </p>
                <h2>ระยะเวลาในสมัครทุน</h2>
                <p>สิงหาคม - มีนาคม ของทุกปี</p><br>
            </div>
        </div>

        <button class="btnleft"><a href="http:\\localhost\Intern\Nisit\schoolarShip\tunasupForm.php">สมัคร</a></button>
        <button class="btnright">อัปโหลดเอกสาร</button>
    </div>
</body>

</html>