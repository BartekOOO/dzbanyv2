<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Edytowanie</title>
</head>
<body>
    <span class='napis3'>Edycja pomyślnie wykonana</span>
    <?php
        $nazwa = $_POST['nazwa'];
        $opis = $_POST['opis'];
        $wysokosc = $_POST['wysokosc'];
        $pojemnosc = $_POST['pojemnosc'];
        $id = $_POST['id'];

        $polaczenie = new mysqli('localhost','root','','dzbanydb');
        mysqli_query($polaczenie,"update dzbany SET nazwa='$nazwa', opis='$opis', wysokosc=$wysokosc, pojemnosc=$pojemnosc where Id=$id;");
        mysqli_close($polaczenie);
    ?><br>
<a href="http://localhost/zadanie8/index.php"><button class='przycisk'>Powrót</button></a>
</body>
</html>