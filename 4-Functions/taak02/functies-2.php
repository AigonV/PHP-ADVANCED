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

echo"Als ik 5, 3 en 8 bij elkaar optel, krijg ik ". rekenUit(5, 3, 8);
?>

</body>
</html>