<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Witaj serdecznie.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Cześć, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Witam na naszej stronie.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Zrestartuj swoje hasło.</a>
        <a href="logout.php" class="btn btn-danger ml-3">Wyloguj się ze swojego konta.</a>
    </p>
</body>
</html>