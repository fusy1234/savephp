<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>KWIACIARNIA</h1>
    <form action="" method="POST">
    <Label>Nazwa kwiatka:</Label>
    <br>
    <select name="nazwa" id="nazwa">
        <?php
        $plik=fopen("zad3.txt","r");
        for($i=0;$i<6;$i++)
        {
            $a = fgets($plik);
            $b[$i] = explode(" ",$a);
            echo "<option value=".$b[$i][0].">";
            echo $b[$i][0];
            echo "</option>";
        }
        ?>
        </select>
        <br>
    <Label>Ilość:</Label>
    <br>
    <input type="number" name="ilosc"></input>
    <br>
    <Label>Zapakować: </Label>
    <input type="checkbox" name="zapakowac">
    <br>
    <button type="submit">OK</button>
    </form> 

</body>
</html>
<?php
$k = $_POST["nazwa"];
$il = $_POST["ilosc"];
$z = $_POST["zapakowac"];
$cena = 0;
echo "Rodzaj: ".$k."<br> Ilośc: ".$il;
echo "<br>";

for($i=0;$i<6;$i++)
{
    if($k==$b[$i][0])
    {
    echo "kolor: ".$b[$i][1]; $cena=$b[$i][2];
    }
}
echo "<br> Czy zapakować: ";
if($z == true )
{
    $cena = $cena*$il+20;
    echo "Tak";
}else{
    $cena = $cena*$il;
    echo "Nie";}
echo "<br> Cena: ".$cena."zł";

?>
