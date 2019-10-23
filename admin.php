<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.6.1/dist/paper.min.css">
</head>
<body>
<div class="paper container">

<?php

if ($_SESSION["prihlaseni"] != "") {
    echo "Vítejte, " . $_POST["login"] = true; }
?>
    <table>

<?php
 if ($_SESSION["prihlaseni"] != "")
foreach ($_SESSION["data"] as $klic => $hodnota) {
    echo "<tr>
                <td>$klic</td>
                <td>$hodnota</td>
            </tr>"; }
?>
    </table>
</body>
<?php
if ($_SESSION["prihlaseni"] != true) {
    echo "Přístup zamítnut"; }
?>

        <div class="row">
            <div class="col-12 col">
                <button class="btn-block"><a href='logout.php'>Odhlásit</a></button><br>
            </div>
        </div>
