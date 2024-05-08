<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Dodawanie nowego dzbana</title>
</head>
<body>
<div id="kontener">
        <form action="http://localhost/zadanie8/Scripts/insert.php" method="post">
            <span class="napis1">Dodawanie nowego dzbana</span><br><br>
            <input type="text" name="nazwa" placeholder="Nazwa dzbana"><br><br>
            <textarea name="opis" rows="5" cols="50"></textarea><br><br>
            <input type="number" name="pojemnosc" placeholder="Pojemnośc dzbana"><br><br>
            <input type="number" name="wysokosc" placeholder="Wysokośc dzbana"><br><br>
            <input class="przycisk" value="Dodaj nowego dzbana" type="submit">
        </form>
        <br>
        <a href="http://localhost/zadanie8/index.php"><button class='przycisk'>Powrót</button></a>
    </div>
</body>
</html>