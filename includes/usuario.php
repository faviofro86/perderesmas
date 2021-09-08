<?php
include_once('conexion.php');

class Usuario{
    
    public function datos($doc){
        global $pdo;
        
        $query = $pdo->prepare("SELECT * FROM registros WHERE dni = ?");
        $query->bindValue(1, $doc);
        $query->execute();
        return $query->fetch();
    }
    
    public function iddni($a){
        global $pdo;
        $query = $pdo->prepare("SELECT id FROM registros WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetch();
    }
    
}

?>