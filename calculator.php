<?php
$formule = readline ("Welke operatie wil je uitvoeren? (+, -): ");
$a = readline ("eerste getal: ");
$b = readline ("tweede getal: ");

if ($formule === "+") {
    echo "dit is u resultaat: " . $a += $b;
}

elseif ($formule === "-")
{
 echo "dit is je resultaat: " . $a -= $b;
}
?>