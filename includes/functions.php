<?php
session_start();

if (isset($_GET['a'])){
    logout();
}else{
    header('Location: ../home.php');
}

function logout(){
    session_destroy();
    return header('Location: ../index.php');
}

?>