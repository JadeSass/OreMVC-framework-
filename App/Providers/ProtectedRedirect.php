<?php

function checkSession(){
    if(!isset($_SESSION['user_id'])){
        redirect('auth/login');
    }

}

?>