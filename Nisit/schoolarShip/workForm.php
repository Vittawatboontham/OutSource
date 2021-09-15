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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http:\\localhost\Intern\Nisit\resource\css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            width: 100%;
        }

        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 20px;
            height: auto;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    <style>
        .form__group {
            position: relative;
            padding: 15px 0 0;
            margin-top: 10px;
            width: 50%;
        }

        .form__field {
            font-family: inherit;
            width: 180%;
            border: 0;
            border-bottom: 2px solid #9b9b9b;
            outline: 0;
            font-size: 1.3rem;
            color: black;
            padding: 7px 0;
            background: transparent;
            transition: border-color 0.2s;
        }

        .form__field::placeholder {
            color: transparent;
        }

        .form__field:placeholder-shown~.form__label {
            font-size: 1.3rem;
            cursor: text;
            top: 20px;
        }

        .form__label {
            position: absolute;
            top: 0;
            display: block;
            transition: 0.2s;
            font-size: 1rem;
            color: #9b9b9b;
        }

        .form__field:focus {
            padding-bottom: 6px;
            font-weight: 700;
            border-width: 3px;
            border-image: linear-gradient(to right, #11998e, #38ef7d);
            border-image-slice: 1;
        }

        .form__field:focus~.form__label {
            position: absolute;
            top: 0;
            display: block;
            transition: 0.2s;
            font-size: 1rem;
            color: #11998e;
            font-weight: 700;
        }

        /* reset input */
        .form__field:required,
        .form__field:invalid {
            box-shadow: none;
        }

        /* demo */
        /* body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-size: 1.5rem;
            background-color: #222;
        }  */
    </style>

</head>

<body>
    <?php
    include "../resource/nav.php";
    ?>
    <div class="bigBox" style="height: fit-content !important;">
        <br>

        <h1 style="text-align: center;">หน้ากรอกการสมัครทุนขาดแตลน</h1> <br>
        <hr>
        <form>
            <div class="row">
                <div class="column">
                    <!-- <div class="form__group field">
                        <input type="input" class="form__field" placeholder="ตัวอย่างถ้าจะเอาด้วย" name="name" id='name' required />
                        <label class="form__label">ตัวอย่าง </label>
                    </div> -->
                    ระบุชื่อทุน<br> <input type="text" required><br>
                    ภาค<br> <input type="text" required><br>
                    ปีการศึกษา<br> <input type="text" required><br>
                    ชื่อ-สกุล<br> <input type="text" required><br>
                    เลขประจำตัวนิสิต<br> <input type="text" required><br>
                    นิสิตชั้นปี<br> <input type="text" required><br>
                    คะแนนเฉลี่ยสะสม<br> <input type="text" required><br>
                    เกิดวันที่<br><input type="text" required><br>
                    เดือน<br><input type="text" required><br>
                    พ.ศ.<br><input type="text" required><br>
                    อายุ<br><input type="text" required><br>
                    ภูมิลำเนาบ้านเลขที่<br><input type="text" required><br>
                    หมู่ที่<br><input type="text" required><br>
                    ซอย<br><input type="text" required><br>
                    ถนน<br><input type="text" required><br>
                    ตำบล<br><input type="text" required><br>
                    อำเภอ<br><input type="text" required><br>
                    จังหวัด<br><input type="text" required><br>
                    โทรศัพท์<br><input type="text" required><br>
                    ที่อยู่ซึ่งสามารถติดต่อโดยตรงได้สะดวก<br><input type="text" required><br>
                    ชื่อบิดา<br><input type="text" required><br>
                    อายุ<br><input type="text" required><br>
                    อาชีพ<br><input type="text" required><br>
                    สถานประกอบอาชีพ<br><input type="text" required><br>
                    รายได้ต่อเดือน<br><input type="text" required><br><br><br><br><br><br>

                </div>
                <div class="column">
                    รูปถาย <input type="file" name="fileToUpload" id="fileToUpload"> <br>
                    ชื่อมารดา<br><input type="text" required><br>
                    อายุ<br><input type="text" required><br>
                    อาชีพ<br><input type="text" required><br>
                    สถานประกอบอาชีพ<br><input type="text" required><br>
                    รายได้ต่อเดือน<br><input type="text" required><br>
                    สภาวะของบิดามารดา<br><input type="text" required><br>

                    ภูมิลำเนาของบิดามารดา<br><input type="text" required><br>
                    <p>มีพี่น้องร่วมบิดามารดาและระดับการศึกษาเรียงตามลำดับ คือ (นับรวมผู้ขอรับทุนการศึกษาด้วย)</p>
                    1.<input type="text" required><br>
                    2.<input type="text" required><br>
                    3.<input type="text" required><br>
                    4.<input type="text" required><br>
                    5.<input type="text" required><br>
                    6.<input type="text" required><br>
                    นิสิตได้รับเงินค่าใช้จ่ายเดือนละ<br><input type="text" required><br>
                    จาก<br><input type="text" required><br>
                    เกี่ยวข้องเป็น<br><input type="text" required><br>
                    อาชีพ<br><input type="text" required><br>
                    สถานประกอบอาชีพ<br><input type="text" required><br>
                    รายได้ต่อเดือน<br><input type="text" required><br>
                    นิสิตมีรายได้จากการทำงานนอกเวลาการศึกษาหรือทางอื่นประมาณเดือนละ<br><input type="text" required><br>
                    ประเภทของงานที่ทำ<br><input type="text" required><br>
                    ระบุความจำเป็นและสาเหตุที่ต้องขอรับทุนการศึกษา<br><input type="text" required><br>
                    ระบุทุนการศึกษามราเคยได้รับมาแล้ว<br><input type="text" required><br>
                    ขณะนี้อยู่ระหว่างขอทุนอื่นคือ<br><input type="text" required><br>
                    สุขภาพและโรคประจำตัวของผู้สมัคร<br><input type="text" required><br>
                    สถานที่ศึกษาที่ผู้สมัครสำเร็จการศึกษาชั้นประถมและมัธยมศึกษา<br><input type="text" required><br>
                    กิจกรรมเพื่อส่วนรวมและอื่นๆที่กระทำ<br><input type="text" required><br>
                    โครงการหรอความตั้งใจที่จะประกอบอาชีพในอนาคต<br><input type="text" required><br>
                </div>
            </div>

            <div style="margin-top: auto;">


                <p>จดหมายเล่าประวตส่วนตัว ความจำเป็นที่ต้องขอรับทุนการศึกษา และข้อความบนนยาย ความสนใจและกิจกรรมต่างๆของตนเช่น สาเหตุความจูงใจในการเลือกเรียนวิชาทที่ตนเรียน งานที่จะทำเมื่อสำเร็จการศึกษาแล้ว</p>
                <textarea name="reviews" rows=10 required ></textarea><br>

            </div>

            <button class="btn-dark">subbmit</button>


        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>