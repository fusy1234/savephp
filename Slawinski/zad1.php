<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method = "post">
        <h2>Dane osobowe</h2>
        Nazwisko: <input type="text" name = "nazwisko" required><br>
        Płeć: <br>
        Kobieta <input type = "radio" name = "plec" checked value = "Kobieta"><br>
        Mężczyzna <input type = "radio" name = "plec" value = "Mężczyzna"><br>
        Wykształcenie: 
        <select name = "wyksztalcenie">
            <option>podstawowe</option>
            <option>zawodowe</option>
            <option>średnie</option>
            <option>wyższe</option>
        </select>
        <button type = "submit" name = "submit">Wyślij</button>
    </form>
</body>
</html>

<?php

/*

*/
if (isset($_POST["submit"])) { //po wprowadzeniu: do pliku dane-osobowe.txt //file mode "a"
    $plik = fopen("dane-osobowe.txt", 'a');
    fwrite($plik, $_POST["nazwisko"].", ".$_POST["plec"].", wykształcenie: ".$_POST["wyksztalcenie"]."\n");
    fclose($plik);
}

?>