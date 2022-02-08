<!DOCTYPE html>
<html>

<?php

echo"Voornaam: ".$_POST["voornaam"];
echo"<br/>";
echo"Achternaam: ".$_POST["achternaam"];
echo"<br/>";
echo"Klas: ".$_POST["klas"];
echo"<br/>";
echo"Leeftijd: ".$_POST["leeftijd"];
echo"<br/>";
echo"Adres: ".$_POST["adres"];
echo"<br/>";
echo"Woonplaats: ".$_POST["woonplaats"];
echo"<br/>";
echo" " .$_POST["geslacht"];
echo"<br/>";
echo" " .$_POST["color"];

?>

<style>
    body {
        background-color: <?php echo $_POST["color"];?>;
    }
</style>   

</body>
</html>