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
</head>

<body>
    <?php
    include "../resource/nav.php";
    ?>
</body>

</html>