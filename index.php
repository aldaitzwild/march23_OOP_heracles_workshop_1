<?php

require 'src/Fighter.php';

$heracles = new Fighter('Héraclès', 20, 6);
$lion = new Fighter('Lion de Némée', 11, 13);
$round = 1;

while(true) {
    echo "#round $round\n";
    echo $heracles->getName() . " - PV : " . $heracles->getLife() . "\n";
    echo $lion->getName() . " - PV : " . $lion->getLife() . "\n";

    $heracles->fight($lion);

    if(!$lion->isAlive()) {
        echo $lion->getName() . " est mort !\n";
        echo $heracles->getName() . " a gagné !\n";
        break;
    }

    $lion->fight($heracles);

    if(!$heracles->isAlive()) {
        echo $heracles->getName() . " est mort !\n";
        echo $lion->getName() . " a gagné !\n";
        break;
    }

    $round++;
}

