<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method = "post">
        <h2>Szkoła</h2>
        Wybierz przedmiot/y:<br>
        <select name = "przedmiot[]" multiple>
            <?php
                $plik = fopen("dane.txt", "r");
                while($line = fgets($plik)) {
                    $dat = explode(" ", $line);
                    echo '<option value = "'.$line.'">'.$dat[0].'</option>';
                }
            ?>
        </select><br>
        Nazwisko: <input type="text" name = "nazwisko"  required><br>

        <button type = "submit" name = "submit">Wyślij</button>
    </form>
</body>
</html>

<?php

/*
W pliku dane.txt - 6 rekordów każdy rekord to przedmiot szkolny np.

j_polski 4.5



Kowalski, przedmioty:

średnia wybranych przedmiotów: 3.5
*/

if (isset($_POST["submit"])) {
    $tab = $_POST["przedmiot"];
    if (sizeof($tab) == 0) {
        echo $_POST["nazwisko"].", wybrane przedmioty: brak<br>";
        return;
    }
    $s = 0;
    echo $_POST["nazwisko"].", wybrane przedmioty: <br>";
    foreach ($tab as $k => $v) {
        $dat = explode(" ", $v);
        echo $dat[0]."<br>";
        $s += $dat[1];
    }
    echo "Średnia wszystkich wybranych przedmiotów: ".($s/sizeof($tab));

}
?>