<?php
    $text =<<< TEXT
    CDV - 
    Collegium
    Da
    Vinci<br>
    TEXT;

    echo $text;
    echo nl2br($text);

//zamiana na małe litery
    echo strtolower($text);
//zamiana na małe litery
    echo strtoupper($text);
//zmiana tylko pierwszej na dużą upper case first
    echo ucfirst($text);
    echo ucfirst(strtolower(trim($text))); //trim potrzebny bo przed cdv jest spacja i spacje zamineia na duża
    echo ucwords(strtolower(trim($text))); //duża litera w każdym słowie

    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore esse saepe modi quia, accusamus, necessitatibus exercitationem nam facere ratione autem eius. Ipsam nulla, voluptates enim nisi praesentium dolorum id tempora.";
    echo $lorem, '<br';
    $col = wordwrap($lorem, 40, "<br>");
    echo "<br>";
    $col = wordwrap($lorem, 20, "<hr>");
    echo $col, "<br>";

//usuwanie białych znaków
    $name = " Janusz  ";
    echo strlen($name);
    echo strlen(ltrim($name)), "<br>";
    echo strlen(rtrim($name)), "<br>";
    echo strlen(trim($name)), "<br>";

//przeszukiwanie ciągu znaków

    $address = "Poznań, ul. Polna 10, tel. (61) 111 22 33";
    $find = strstr($address, 'tel');
    $find = stristr($address, 'Tel');
    $find = stristr($address, 'Tel', true);
    $find = stristr($address, 'Tel', false);
    echo $find, '<br';

    $surname = substr("Janusz Kowalski", 7, 5);
    echo $surname, '<br>';

//przetwarzanie ciągów znaków

    $login = "Bączek";
    $censure = array("ą","ę","ś","ż","ć","ó","ń","ł");
    $replace = array("a","e","s","z","c","o","n","l");

    $validLogin = str_replace($censure, $replace, $login);
    echo "Dane przed poprawą: $login<br>";
    echo "Dane po poprawie: $validLogin<br>";
?>