<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method = "post">
        <h2>Zamówienie pizzy</h2>
        Wybierz rodzaj: <br>
        <select name = "rodzaj">
            <option>pepperoni</option>
            <option>margharita</option>
            <option>hawajska</option>
        </select><br>
        Czy rabat: <input type = "checkbox" name = "rabat"><br>
        <button type = "submit" name = "submit">Wyślij</button>
    </form>
</body>
</html>

<?php
    
    
/*

*/
if (isset($_POST["submit"])) {
    $ceny = Array("pepperoni" => 30, "margharita" => 35, "hawajska" => 40);
    $cena = $ceny[$_POST["rodzaj"]];

    echo "Wybrana pizza: ".$_POST["rodzaj"]."<br>";
    if (isset($_POST["rabat"])) {
        echo "Cena bez rabatu: ".$cena."zł<br>";
        $cena = $cena * 0.9;
        echo "Cena z rabatem: ".$cena."zł<br>";
        
    } else {
        echo "Cena bez rabatu: ".$cena."zł<br>";
    }
}
?>