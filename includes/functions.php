<?php
session_start();
$email = $_POST['email'];
$dni = $_POST['dni'];


if(isset($_GET['a'])){
    session_destroy();
    echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
}


?>