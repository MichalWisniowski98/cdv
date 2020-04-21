<?php
    function value($a):bool{
        if($a < 0){
            return "ujemna";
        }
        elseif($a > 0){
            return "dodatnia";
        }
        else{
            return "zero";
        }
    }

    $x = value(-5);
    echo $x;
    echo gettype($x), '<br>';

    function getValue():int{
        return 10.55;
    }

    echo getValue();

//zasięg zmiennych
    $x=10;
    function show(){
        echo "Wartość zmiennej ", $GLOBALS['x'],'<br>';
        $GLOBALS['x'] += 1;
        echo "Wartość zmiennej ", $GLOBALS['x'], '<br>';
    }
    show();
    echo "Wartość zmiennej ", $GLOBALS['x'], '<br>';

    function show1(){
        global $x;
        echo "Wartość zmiennej $x",'<br>';
        $x += 1;
        echo "Wartość zmiennej $x", '<br>';
    }
    show();
    echo "Wartość zmiennej ", $GLOBALS['x'], '<br>';

    function add(){
        $num = 10;
        echo "\$num = $num<br>";
        $num += 10;
    }
    add();
    add();
    add();
    echo "<br>";

    function add1(){
        static $num = 10;
        echo "\$num = $num<br>";
        $num += 10;
    }
    add1();
    add1();
    add1();

    echo "<br>";
//argumenty

    function add2($x, $y=1){
        return $x + $y;
    }
    $z = 20;

    $num = add2($z, 6);
    echo $num, '<br>';

    $num = add2(2, 6);
    echo $num, '<br>';

    $num = add2(3);
    echo $num, '<br>';

    echo "<br>";

//argumenty i typy dancyh

    function multi(float $x, int $y){
        return $x * $y;
    }

    echo multi(3, 4), '<br>';  //12
    echo multi(3.5, 2), '<br>'; //7
    echo multi(2, 3.5), '<br>'; //6

?>