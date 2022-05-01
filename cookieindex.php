<?php
    include('functions.php');
    session_start();

    if (user_logged_in()) {
        header('location: admin.php');
    }

    if(isset($_POST['login'])){

        define ('USERNAME', 'BISHAL');
        define ('PASSWORD', '123');

        $user = $_POST['username'];
        $pass = $_POST['password'];

        if(isset($_POST['check'])){
            $check = $_POST['check'];
        }

        

        if(USERNAME == $user && PASSWORD == $pass){

            $_SESSION['success'] = "done";

            setcookie('success',$check, time()+60*60);

            header('location: admin.php');
        }
        else{
            $fail = "Password or Username Incorrect";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="USERNAME"  required> <br>
        <input type="password" name="password" placeholder="PASSWORD"  required> <br>

        <input type="checkbox" name="check" id="chek"> 
        <label for="chek">Keep Me Logged In</label><br>

        <input type="submit" name="login" value="Log In">
    </form>


    <?php
        if(isset($fail)){
            echo $fail;
        }
    ?>

</body>
</html>