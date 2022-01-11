<?php
$firsname = "Helmi";
$lastname = "Tazkia";

$anonimusfunction = function () use ($firsname, $lastname): string {
    return "Hello $firsname $lastname" . PHP_EOL;
};

echo $anonimusfunction();
