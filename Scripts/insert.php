<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="stylesheet" href="../Styles/style2.css">
    <title>Dodawanie nowego dzbana</title>
</head>
<body>
<?php
try{
    $polaczenie = new mysqli('localhost','root','','dzbanydb');

    $nazwa = $_POST['nazwa'];
    $opis = $_POST['opis'];
    $pojemnosc = $_POST['pojemnosc'];
    $wysokosc = $_POST['wysokosc'];

    $komenda = "insert into dzbany (nazwa,opis,pojemnosc,wysokosc) values ('$nazwa','$opis',$pojemnosc,$wysokosc);";

    mysqli_query($polaczenie,$komenda);
    echo "<span class='napis3'>Dodano nowego dzbana do bazy</span>";
}
catch(Exception $e){
    echo "<div id='kontener'>";
    echo "<script src='../Scripts/obslugaBledu.js'></script><script>bladDodawania()</script>";
    echo "</div>";
}

?><br>
<a href="http://localhost/zadanie8/index.php"><button class='przycisk'>Powrót</button></a>
</body>
</html>