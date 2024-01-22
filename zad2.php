<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <Label>Podaj nazwisko:</Label>
    <input type="text" name="nazwisko">
    <br>
    <Label>Zawód:</Label>
    <br>
    <select name="zawod" id="zawod">
        <?php
        $plik=fopen("zad2.txt","r");
       
        for($i=0;$i<8;$i++)
        {
           
            $zawod = fgets($plik);
            echo "<option value='$zawod'>";
            echo $zawod;
            echo "</option>";
        }
        ?>
    </select>
    <br>
    <button type="submit">OK</button>
    </form> 

</body>
</html>
<?php
$nazwisko = $_POST["nazwisko"];
$z = $_POST["zawod"];
$d=$nazwisko." ".$z;
$zapis = fopen("zapis.txt","a");
fwrite($zapis,$d);
fclose($zapis);
?>
