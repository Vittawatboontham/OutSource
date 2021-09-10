<?php
session_start();
ob_start();
if ($_SESSION['login'] != "true") {
    header("Location: http://localhost/intern/nisit/loginNisit.php");
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http:\\localhost\Intern\Nisit\resource\css.css">


    <script>
        window.onscroll = function() {
            myFunction()
        };

        // Get the navbar
        var navbar = document.getElementById("topnav");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</head>

<body>
    <?php
    include "resource/nav.php";
    ?>
    <!-- <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <div class="topnav-right">
            <a href="#Profile">Profile</a>
        </div>
    </div> -->
    <div class="bigBox">
        <h1 style="text-align: center;">ทุนคณะวิทยาศาสตร์ศรีราชา</h1>
        <hr>

        <div class="row">
            <div class="column">
                <div class="card">
                    <h3><a href="http:\\localhost\Intern\Nisit\schoolarShip\tunasup.php">ทุนขาดแคลนทุนทรัพย์</a></h3>
                    <p>Some text</p>
                    <p>Some text</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3><a href="http:\\localhost\Intern\Nisit\schoolarShip\work.php">ทุนช่วยงานคณะ</a></h3>
                    <p>Some text</p>
                    <p>Some text</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3><a href="http:\\localhost\Intern\Nisit\schoolarShip\emergency.php">ทุนฉุกเฉินสำหรับนิสิค</a></h3>
                    <p>Some text</p>
                    <p>Some text</p>
                </div>
            </div>
        </div>


    </div>
    <footer>
        <img class="picBox" src="http:\\localhost\Intern\Nisit\resource\pic1.jpg">
    </footer>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>