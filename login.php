<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Přihlášení</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.6.1/dist/paper.min.css">
</head>
<body>
<?php
$_SESSION["data"] = ["Datum registrace:" => "2. 4. 2018",
        "Souhlas s podmínkami:" => "ANO",
        "Počet objednávek:" => 23];
?>
<div class="paper container">
    <form method="POST">
    <h2>Přihlášení uživatele</h2>
    <p><div class="row">
        <div class="col sm-6">
            <div class="form-group">
                <label for="paperInputs2">Login</label>
                <input class="input-block" type="text" name="login" id="paperInputs2">
            </div>
        </div>
        <div class="col sm-6">
            <div class="form-group">
                <label for="paperInputs3">Heslo</label>
                <input class="input-block" type="password" name="heslo" id="paperInputs3">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col">
            <button class="btn-block">Přihlásit</button><br>
        </div>
    </form>
<?php
if ($_POST["login"] == "admin" && $_POST["heslo"] == "top-secret") {
    $_SESSION["prihlaseni"] = true; }
if (isset($_SESSION["prihlaseni"])) {
    echo "<a href='admin.php'>Pokračovat do administrace</a>"; }
else {
    echo "Chybné jméno nebo heslo"; }