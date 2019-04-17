<?php

$bum = "bum";
$increment = 0;
$pole = ["jedna", 2];

echo $increment;

function Ratata()
{
    global $bum, $increment, $pole;
    $skum = "skum";
    echo $skum . $bum;
    
    foreach($pole as $value)
        var_dump($value);

    $increment++;
}

Ratata();
echo $increment;
print $increment;
var_dump($increment);