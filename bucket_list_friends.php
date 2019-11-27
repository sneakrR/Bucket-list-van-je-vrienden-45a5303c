<?php


echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$a = readline();

for ($b = 1; $b <= $a; $b++) {
    echo "Wat is jouw naam?" . PHP_EOL;
    $naam = readline();
    echo "Wat is jouw droom?" . PHP_EOL;
    $droom = readline();

echo "$naam heeft dit als droom: $droom" . PHP_EOL;
}