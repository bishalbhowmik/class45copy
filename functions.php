<?php

    function user_logged_in (){
        
        if(isset($_SESSION['success']) || isset($_COOKIE['success'])){
            return true;
        }
        else{
            return false;
        }
    }

?>