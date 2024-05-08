<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Dzbany</title>
</head>
<body>
    <div id="kontener">
    <a href="http://localhost/zadanie8/Scripts/insertForm.php"><button class="przycisk">Dodaj nowego dzbana</button></a>
    </div>
    <br>

    <table>
        <tr>
            <th><span class="napis1">Nazwa</span></th>
            <th><span class="napis1">Opis</span></th>
            <th><span class="napis1">Pojemność</span></th>
            <th><span class="napis1">Wysokość</span></th>
        </tr>
    <?php
        try{
            $polaczenie = new mysqli('localhost','root','','dzbanydb');

            $zapytanie = mysqli_query($polaczenie,"select * from dzbany;");
            while($wiersz = mysqli_fetch_array($zapytanie)){
                echo "<tr>";
                echo "<td><a href='Scripts/details.php?id={$wiersz['Id']}'><span class='napis2'>{$wiersz['nazwa']}</span></a></td>";
                echo "<td><a href='Scripts/details.php?id={$wiersz['Id']}'><span class='napis2'>{$wiersz['opis']}</span></a></td>";
                echo "<td><a href='Scripts/details.php?id={$wiersz['Id']}'><span class='napis2'>{$wiersz['pojemnosc']}</span></a></td>";
                echo "<td><a href='Scripts/details.php?id={$wiersz['Id']}'><span class='napis2'>{$wiersz['wysokosc']}</span></a></td>";
                echo "</tr>";
            }
            mysqli_close($polaczenie);
        }
        catch(Exception $e){
            echo "<script src='Scripts/obslugaBledu.js'></script><script>bladPolaczenia()</script>";
        }
    ?>
    </table>
    <br><br><br><br><br><br>
</body>
</html>