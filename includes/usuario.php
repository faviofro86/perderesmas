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
    
    public function grasa($a){
        global $pdo;
        $query = $pdo->prepare("SELECT grasa FROM datos WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function imc($a){
        global $pdo;
        $query = $pdo->prepare("SELECT d.imc FROM datos d JOIN registros r ON r.dni = d.dni WHERE r.dni = ? GROUP BY d.imc");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetch();
    }
    
    public function peso($a){
        global $pdo;
        $query = $pdo->prepare("SELECT d.peso FROM datos d JOIN registros r ON r.dni = d.dni WHERE r.dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetch();
    }
    
    public function cintura($a){
        global $pdo;
        $query = $pdo->prepare("SELECT d.cintura FROM datos d JOIN registros r ON r.dni = d.dni WHERE r.dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetch();
    }
    
    public function brazo($a){
        global $pdo;
        $query = $pdo->prepare("SELECT d.brazo FROM datos d JOIN registros r ON r.dni = d.dni WHERE r.dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetch();
    }
    
    public function valores($a){
        global $pdo;
        $query = $pdo->prepare("SELECT d.grasa, d.imc, d.peso, d.cintura, d.brazo FROM datos d JOIN registros r ON r.dni = d.dni WHERE r.dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetch();
    }
    
    public function valoresd($a){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM datos WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        return $query->fetchAll();
    }
    
}

?>