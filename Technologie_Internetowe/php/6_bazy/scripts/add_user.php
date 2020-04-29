//<?php
//if ($_GET['name','surname','birthday']){
//    $name = $_GET['name'];
//    $surname = $_GET['surname'];
//    $birthday = $_GET['birthday'];
//   require_once './connect.php';
//    $sql = "INSERT INTO `user`(`id`, `city_id`, `name`, `surname`, `birthday`)
//    VALUES ([value-1],[value-2],'$name','$surname','$birthday')";
//    if($result = mysqli_query($conn, $sql));
//    mysqli_close($conn);
//}

//header('location: ../1_shop.php');
//?>

<?php
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday']) && !empty($_POST['city_id'])){
        echo 'ok';
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $birthday = $_POST['birthday'];
        $city_id = $_POST['city_id'];
        require_once './connect.php';
        $sql = "INSERT INTO `user`(`id`, `city_id`, `name`, `surname`, `birthday`)
        VALUES (NULL,'$city_id','$name','$surname','$birthday')";
        if($result = mysqli_query($conn, $sql));
        mysqli_close($conn);
        header('location: ../1_shop.php');
    }
    else{
        header('location: ../1_shop.php');
    }

    
?>