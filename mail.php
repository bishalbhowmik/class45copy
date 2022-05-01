<?php


    if(isset($_POST['login'])){
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
        $message = $_POST['message'];
        $to = "bishal1831047@gmail.com";
        $subject = "This is a test email";
        $header = "From: $email";

        if($firstname == NULL){
            $error['fname'] = "First Name Required";
        }
        if($lastname == NULL){
            $error['lname'] = "Last Name Required";
        }
        if($email == NULL){
            $error['email'] = " Email Address Required";
        }

        if(!$email_validate && !isset($error['email'])) {
            $error['email_validate'] = "Email is not correct";
        }

        if($message == NULL){
            $error['message'] = "Message Required";
        }

        if(count($error)==0){
            
            mail  ($to, $subject,  $message, $header);

            $success = "Successfully Submitted";
        }
        
    }

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="First Name"> <br>
        <p class="error"><?php if(isset($error['fname'])){echo $error['fname'];} ?></p>

        <input type="text" name="last_name" placeholder="Last Name"> <br>
        <p class="error"><?php if(isset($error['lname'])){echo $error['lname'];} ?></p>

        <input type="email" name="email" placeholder="Email Address"> <br>
        <p class="error"><?php if(isset($error['email'])){echo $error['email'];} ?></p>
        <p class="error"><?php if(isset($error['email_validate'])){echo $error['email_validate'];} ?></p>

        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <p class="error"><?php if(isset($error['message'])){echo $error['message'];} ?></p>
        

        <input type="submit" value="Send" name="login">

    </form>

    <p class="success"><?php if(isset($success)){echo $success;} ?></p>
</body>
</html>