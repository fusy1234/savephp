
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <Label>Wymiary:</Label>
        <br>
    <input type="number" name="Szerokosc" placeholder="Szerokość...">
    <input type="number" name="Wysokosc" placeholder="Wysokość...">
    <input type="number" name="Dlugosc" placeholder="Długośc...">
    <br>
    <Label>Rodzaj Pędzla:</Label>
    <input type="radio" id="html" name="rodzaj" value="Cienki">
    <input type="radio" id="html" name="rodzaj" value="Szeroki">
    <br>
    <Label>Rodzaj farby:</Label>
    <br>
    <select name="farby" id="farby">
        <option value="akrylowa">Akrylowa</option>
        <option value="emulsa">Emulsa</option>
        <option value="lateksowa">Lateksowa</option>
    </select>
    <br>
    <Label>Firma: </Label>
    Nie:
    <input type="radio" name="firma" id="firma" value="Nie">
    Tak:
    <input type="radio" name="firma" id="firma" value="Tak">

    <br>
    <button type="submit">OK</button>

</form>
</body>
</html>

<?php
$s = $_POST["Szerokosc"];
$w = $_POST["Wysokosc"];
$d = $_POST["Dlugosc"];
$rodzajp = $_POST["rodzaj"];
$rodzajf = $_POST["farby"];
$firma = $_POST["firma"];
if($s==NULL || $w==NULL || $d==NULL || $rodzajp == NULL || $rodzajf == NULL)
{
    echo "Formulaż nie jest wypełniony";
}else
{


$p = ($s*$w)*2+($s*$d)+($w*$d)*2;
echo "Powierzchnia: ".$p."m^2";
echo "<br>";
// SZEROKI 1M^2 5min
// CIENKI 1M^2 15min
$czass = ($p*5/60);
$czasc = ($p*15/60);
echo "Rodzaj pędzla: ".$rodzajp;
echo "<br>";
switch($rodzajp)
{
    case "Cienki":
        echo "Czas farby: ". $czasc. " h";
        echo "<br>";
        break;
    
    case "Szerok":
        echo "Czas farby: ".$czass. " h";
        echo "<br>";
        break;
}
//lateksowa 30
// emulsa 10            m^2
//akrylowa 15
switch($rodzajf)
{
    case "akrylowa":
        echo "Koszt malowania: ".($p*15) ."zl";
        break;
    case "lateksowa":
        echo "Koszt malowania: ".($p*30) ."zl";
        break;
    case "emulsa":
        echo "Koszt malowania: ".($p*10) ."zl";
        break;
}
echo "<br>";
switch($firma)
{
    case "Tak":
        echo "Koszt robocizny: ". $p*20 ."zl";
        echo "<br>";
        break;
    
    case "Nie":
        echo "Nie kożystasz z firmy";
        echo "<br>";
        break;
}

}


?>
