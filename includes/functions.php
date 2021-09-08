<?php

if (isset($_GET['a'])){
    logout($_GET['a']);
}

function logout($res){
    session_start();
    session_destroy();
    header('Location: index.php');
}

?>