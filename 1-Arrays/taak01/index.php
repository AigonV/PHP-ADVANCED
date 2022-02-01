<!DOCTYPE html>
<html>
<body>

<?php
$student = array ("voornaam"=>"Mohammed","achternaam"=>"Ahmed","Klas"=>"LCTSDO1C","leeftijd"=>"17");
echo "Gegevens van Mohammed Ahmed:";
echo "<br>";
echo "Voornaam: " . $student["voornaam"];
echo "<br>";
echo "Achternaam: " . $student["achternaam"];
echo "<br>";
echo "Klas: " . $student["Klas"];
echo "<br>";
echo "Leeftijd: " . $student["leeftijd"] ."jaar";
echo "<br>";
?>

</body>
</html>