<?php
    //Oblicz ile sekund, godzin, dni, lat jest pomiędzy datami które podaje użytkownik

    $data = getdate();

    $h1 = $data['hours'];
    $m1 = $data['minutes'];
    $s1 = $data['seconds'];
    $y1 = 2020;
    $mo1 = 4;
    $d1 = 21;
    


    $time1 = mktime($h1, $m1, $s1, $mo1, $d1, $y1);

    $h2 = 0;
    $m2 = 0;
    $s2 = 0;
    $y2 = 2010;
    $mo2 = 5;
    $d2 = 10;

    
    $time2 = mktime($h2, $m2, $s2, $mo2, $d2, $y2);

    $seconds = abs($time1 - $time2);
    $minutes = floor($seconds / 60);
    $days = floor($minutes - (60 * 24));
    $years = number_format($days / 365, 4);

    echo "Ilość sekund: $seconds<br>";
    echo "Ilość minut: $minutes<br>";
    echo "Ilość dni: $days<br>";
    echo "Ilość lat: $years<br>";

?>