<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Odhlášení</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.6.1/dist/paper.min.css">
</head>
<body>
<div class="paper container">

    <p>Odhlášení proběhlo úspěšně</p>

<?php
unset($_SESSION["prihlaseni"]);
echo "<a href='login.php'>Zpět na přihlašovací formulář</a>";