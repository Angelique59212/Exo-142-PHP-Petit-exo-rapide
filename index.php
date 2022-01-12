<?php

$text = "Hello";
echo $text;
echo "<br><br>";

$arrayText = [
    "Angélique",
    "Louane",
    "Luka",
    "Timéo"
];
echo "<br><br>";
$val= $arrayText[1];

echo "<br><br>";
for($i = 0 ; $i <= 3; $i++) {
    echo $arrayText[$i]. "<br>";
} ?>

<ul>
    <?php
    foreach ($arrayText as $items) {
        echo "<li>" .$items."</li>";
    }
    ?>
</ul>





