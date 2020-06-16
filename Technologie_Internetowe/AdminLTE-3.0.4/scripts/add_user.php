<?php
session_start();
if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email1']) && !empty($_POST['email2']) && !empty($_POST['pass1'])
&& !empty($_POST['pass2']) && !empty($_POST['birthday'])) {
    
    $error=0;

    if(!isset($_POST['terms'])){
        $error=1;
        $_SESSION['error'] = 'Zaznacz regulamin';
    }
    
    if($_POST['pass1'] != $_POST['pass2']){
        $error=1;
        $_SESSION['error'] = 'Hasła są różne';
    }
    
    if($_POST['email1'] != $_POST['email2']){
        $error=1;
        $_SESSION['error'] = 'Adresy poczty są różne';
    }
    
    if($error != 0){
        ?>
            <script>
                history.back();
            </script>
        <?php
        exit();
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $pass1 = $_POST['pass1'];
    $email1 = $_POST['email1'];
    $birthday = $_POST['birthday'];

    //szyfrowanie hasła za pomocą Argon2ID
    $pass = password_hash($pass, PASSWORD_ARGON2ID);

    require_once './connect.php';

    if($conn->connect_errno){
        $_SESSION['error'] = 'Awaria bazy danych!';
        header('location: ../pages/register.php');
        exit();
    }
    
    $sql = "INSERT INTO `user`(`name`, `surname`, `city_id`, `email`, `pass`, `birthday`) VALUES(?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $surname, $city, $email, $pass, $birthday);

    if($stmt->execute()){
        $conn->close();
        $stmt->close();
        header('location: ../?register=success');
        exit();
    }
    else{
        //sprawdzenie czy istnieje w bazie danych email podany przez użytkowanika

        $sql = "SELECT * FROM `user` WHERE `email` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if($conn->affected_rows){
            $_SESSION['error'] = 'Podanu adres email istnieje w bazie dancyh';
        }
        else{
            $_SESSION['error'] = "Nie dodano użytkowanika do bazy danych";
        }
    }

    $conn->close();
    $stmt->close();
    ?>
    <script>
        history.back();
    </script>
    <?php

}
else{
     $_SESSION['error'] = 'Wypełnij wszystkie pola!';
     //header('location: ../pages/register.php');
     ?>
        <script>
            history.back();
        </script>
     <?php
}
?>