<?php
session_start();

if (isset($_GET['a'])){
    session_start();
    session_destroy();
    header('Location: index.php');
}else{
    header('Location: ../home.php');
}

function logout(){
    session_destroy();
    return header('Location: ../index.php');
}

?>