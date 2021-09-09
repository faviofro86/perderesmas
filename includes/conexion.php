<?php

class Conexion{
    public $pdo;
    
    function initPDO(){ 
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=perderesmas', 'root', 'root',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        catch(PDOException $e){
            exit('Database Error' . $e);
        }
        return $this->pdo;
    }

    function closePDO(){
        $this->pdo = null;
    }
    
}


try{
    $pdo = new PDO('mysql:host=localhost;dbname=perderesmas', 'root', 'root',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}catch(PDOException $e){
    exit('Database Error' . $e);
}
// $pdo = new PDO('mysql:host=perderesmas.pe;dbname=perderesmas_gloria', 'perderesmas', 'y%bp=N+50$D9',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>