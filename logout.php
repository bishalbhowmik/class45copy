<?php 

    session_start();

    session_destroy();

    $_SESSION = array();

    setcookie('success',$check, time()-60*60);

    header('location: cookieindex.php');

?>