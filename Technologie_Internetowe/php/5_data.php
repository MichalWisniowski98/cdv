<?php
    echo date("Y-m-d"),"<br>"; // 2020-04-21
    echo date("Y-M-d"),"<br>"; // 2020-Apr-21
    echo date("Y-M-D"),"<br>"; // 2020-Apr-Tue
    echo date("h-i-s"),"<br>"; // 07-01-53
    echo date("H-i-s"),"<br>"; // 19-01-53
    echo date("H-I-s"),"<br>"; // 19-1-53


    echo "Dzień tygodnia: ", date("w"), "<br>";
    echo "Numer tygodnia: ", date("W"), "<br>";
    echo "Dzień roku: ", date("z"), "<br>";

    $data = getdate();
    echo '<pre>';
    print_r($data);
    echo "</pre>";

    echo "Dzień tygodnia: ", $data['weekday'], "<br>";
    $day = $data['wday'];
    switch($day){
        case '0':
            $day = 'niedziela';
        break;
        case '1':
            $day = 'poniedziałek';
        break;
        case '2':
            $day = 'wtorek';
        break;
    }
    echo "Dzień tygodnia: ", $day, "<br>";

//znacznik czasu

    $r1 = 2020;
    $m1 = 4;
    $d1 = 21;

    $time1 = mktime(0,0,0, $m1, $d1, $r1);
    echo $time1, "<br>";
?>