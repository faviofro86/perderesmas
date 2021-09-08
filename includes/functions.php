<?php

if (isset($_GET['a'])){
    logout($_GET['a']);
}

function logout($res){
    session_start();
    session_destroy();
    return header('Location: ../index.php');
}

?>