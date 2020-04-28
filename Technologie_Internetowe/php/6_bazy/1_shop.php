<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/1_table.css">
    <title>Shop - user</title>
</head>
<body>
    <h3>Tabela user</h3>
    <?php
        require_once './scripts/connect.php';
        require_once './scripts/function.php';
        //include_once '.scripts/connect.php';

        //$sql = "SELECT * FROM `user`";
        $sql2 = "SELECT `city`.`city`, `user`.`id`, `user`.`name`, `user`.`name`, `user`.`birthday`
        FROM `city` INNER JOIN `user` ON `user`.`city_id` = `city`.`id`";
        echo <<< TABLE
        <table>
            <tr>
                <th>Id</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Data urodzenia</th>
                <th>Rok urodzenia</th>
                <th>Miasto/th>
            </tr>
        TABLE;
        if ($result = mysqli_query($conn, $sql2)) {

            while($row = mysqli_fetch_assoc($result)){
                $year = year($row['birthday']);
                if ($year == 0000){
                    $year = '-';
                }
                
                echo <<< ROW
                <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[surname]</td>
                    <td>$row[birthday]</td>
                    <td>$year</td>
                    <td>$row[city]</td>
                    <td><a href="./script/del_user.php?id=$row[id]">Usuń</td>
                </tr>
                ROW;
            }
            echo '</table>';
        }
        else{
            echo 'error';
        }
    ?>
    <h3>Koniec pliku</h3>
</body>
</html>