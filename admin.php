<?php 

    include('functions.php');
    session_start();

    if(!user_logged_in()){
        header('location: cookieindex.php');
    }

    if(!isset($_SESSION['success'])){
        header ('location: cookieindex.php');
    }


?>




<h1>WELCOME TO ADMIN PANEL</h1>


<a href="logout.php">Log out</a>