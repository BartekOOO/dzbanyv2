<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Edytowanie - formularz</title>
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
        $pojemnosc = $wiersz['pojemnosc'];
        $wysokosc = $wiersz['wysokosc'];
    }
    
    ?>
        <form action="update.php" method="post">
            <span class="napis1">Edytowanie dzbana</span><br><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="nazwa" placeholder="Nazwa dzbana" value="<?php echo $nazwa; ?>"><br><br>
            <textarea name="opis" rows="5" cols="50"><?php echo $opis; ?></textarea><br><br>
            <input type="number" name="pojemnosc" placeholder="Pojemnośc dzbana" value="<?php echo $pojemnosc; ?>"><br><br>
            <input type="number" name="wysokosc" placeholder="Wysokośc dzbana" value="<?php echo $wysokosc; ?>"><br><br>
            <input class="przycisk" value="Zapisz edycje" type="submit">
        </form><br>
        <a href="http://localhost/zadanie8/index.php"><button class='przycisk'>Powrót</button></a>
    </div>
</body>
</html>