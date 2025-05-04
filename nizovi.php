<?php

//1. zadatak
$voće = ['jabuka', 'banana', 'kivi'];
print_r($voće);

//2. zadatak
$dvijeOsobe = [
    'Prva osoba' => [
        'ime' => 'Janko',
        'prezime' => 'Volarić',
        'rođen' => 1983,
    ],
    'Druga osoba' => [
        'ime' => 'Vinko',
        'prezime' => 'Stubić',
        'rođen' => 2003,
    ]
    ];

    $datumRodenja = ($dvijeOsobe["Druga osoba"]["rođen"]);
    echo "<br>" . "Datum rođenja druge osobe je: " . $datumRodenja;

    //3. zadatak
    $dvijeOsobe["Treća osoba"] = [
        'ime' => 'Brankec',
        'prezime' => 'Malopenisić',
        'rođen' => 1927,
    ];

    unset($dvijeOsobe["Prva osoba"]["rođen"]);
    var_dump($dvijeOsobe);
    
    var_dump(empty($dvijeOsobe["Druga osoba"]["adresa"]));
    var_dump(isset($dvijeOsobe["Druga osoba"]["adresa"]));

    $drzave = ["Bosna", "Srbija", "Slovenija", "Hrvatska"];

    $sadrziHrvatsku = in_array("Hrvatska", $drzave);
    var_dump($sadrziHrvatsku);
    var_dump(array_search("Hrvatska", $drzave));

    $brojevi = [2, 43, 6, 7, 4, 34, 414,];
    sort($brojevi);
    var_dump($brojevi);

    rsort($brojevi);
    var_dump($brojevi);

    asort($brojevi);
    var_dump($brojevi);

    $skupina1 = [2, 4, 6, 8, 10];
    $skupina2 = [1, 3, 5, 7, 9];

    $zajedno = array_merge($skupina1, $skupina2);

    echo "Sve zajedno u ove dvije skupine ima: " . count($zajedno) . " brojeva";






