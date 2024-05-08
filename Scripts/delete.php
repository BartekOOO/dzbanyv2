<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Usuwanie</title>
</head>
<body>
    <?php
        $id = $_GET['id'];

        $polaczenie = new mysqli('localhost','root','','dzbanydb');
        mysqli_query($polaczenie,"delete from dzbany where id=$id");
        mysqli_close($polaczenie);

        echo "<span class='napis3'>Dzban został wywalony do śmieci</span>"
    ?><br>
    <a href="http://localhost/zadanie8/index.php"><button class='przycisk'>Powrót</button></a>
</body>
</html>