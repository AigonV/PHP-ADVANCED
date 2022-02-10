<!DOCTYPE html>
<html>

<?php 
/*
function rekenUit($getal, $getal2, $getal3){
    echo"Als ik $getal en $getal2 bij elkaar optel, krijg ik $getal3";
}

rekenUit(5, 3, 8);
*/

function rekenUit($getal, $getal2, $getal3){

    $antwoord = $getal + $getal2 + $getal3;
    return $antwoord;

}

echo"Als ik 79, 51 en 22 bij elkaar optel, krijg ik ". rekenUit(79, 51, 22);
echo"<br/>";
echo"Als ik 45, 2 en 12 bij elkaar optel, krijg ik ". rekenUit(45, 2, 12);
echo"<br/>";
echo"Als ik 34, 55 en 642 bij elkaar optel, krijg ik ". rekenUit(34, 55, 642);
echo"<br/>";
?>

</body>
</html>