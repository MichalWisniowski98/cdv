
//Napisz program, który pozwoli cenzurować zdanie podane przez użytkownika
//Formularz do wprowadzenia słów,
//niewłaściwe: czarny, biały
//zamiana: _#***#_


<html>
<form method="post">
    <input type="text" name="color" ><br>
    <input type="submit" value="Wyślij">
</fomr>

<?php
    $censure = array("czarny","biały");
    $replace = "_#***#_";

    if(!empty($_POST['color'])){
        $validLogin = str_ireplace($censure, $replace, $_POST['color']);
        echo <<< E
        Dane przed poprawą: $_POST[color]<br>
        Dane po poprawie: $validLogin<br>
        E;
    }
?>

</html>
