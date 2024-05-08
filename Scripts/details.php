<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Szczegóły dzbana</title>
</head>
<body>


<div id="kontener">
<?php

$id = $_GET['id'];

$polaczenie = new mysqli('localhost','root','','dzbanydb');

$zapytanie = mysqli_query($polaczenie,"select * from dzbany where Id=$id;");

while($wiersz = mysqli_fetch_array($zapytanie)){
    $nazwa = $wiersz['nazwa'];
    $opis = $wiersz['opis'];
    $wysokosc = $wiersz['wysokosc'];
    $pojemnosc = $wiersz['pojemnosc'];
}

echo "<span class='napis3'>Nazwa dzbana:</span><br>";
echo "<span class='napis1'>$nazwa</span><br><br>";
echo "<span class='napis3'>Opis:</span><br>";
echo "<span class='napis2'>$opis</span><br><br>";
echo "<span class='napis3'>Wysokość:</span><br>";
echo "<span class='napis2'>$wysokosc</span><br><br>";
echo "<span class='napis3'>Pojemność:</span><br>";
echo "<span class='napis2'>$pojemnosc</span><br><br>";

mysqli_close($polaczenie);

?>

<a href="http://localhost/zadanie8/Scripts/updateForm.php?id=<?php echo $id; ?>"><button class="przycisk">Edytuj</button></a><br><br>
<a href="http://localhost/zadanie8/Scripts/delete.php?id=<?php echo $id; ?>"><button class="przycisk">Usuń</button></a>
<br><br>
<a href="http://localhost/zadanie8/index.php"><button class="przycisk">Powrót</button></a>

</div>
    
</body>
</html>