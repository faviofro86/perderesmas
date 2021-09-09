<?php

include_once('conexion.php');


class Usuario{
    
    public function datos($doc){
        global $pdo;
                
        $query = $pdo->prepare("SELECT * FROM registros WHERE dni = ?");
        $query->bindValue(1, $doc);
        $query->execute();
        //$pdo->closePDO();
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
        //global $pdo;
        $conex = new Conexion();
        $pdo = $conex->initPDO();
        $query = $pdo->prepare("SELECT grasa FROM datos WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        $g=$query->fetchAll();
        $grasa = array();
        foreach($g as $ga){
            $grasa[]=$ga['grasa'];
        }
        $conex->closePDO();
        return $grasa;
    }
    
    public function imc($a){
        $conex = new Conexion();
        $pdo = $conex->initPDO();
        $query = $pdo->prepare("SELECT imc FROM datos WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        $i=$query->fetchAll();
        $imc = array();
        foreach($i as $ia){
            $imc[]=$ia['imc'];
        }
        $conex->closePDO();
        return $imc;
    }
    
    public function peso($a){
        $conex = new Conexion();
        $pdo = $conex->initPDO();
        $query = $pdo->prepare("SELECT peso FROM datos WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        $p=$query->fetchAll();
        $peso = array();
        foreach($p as $pa){
            $peso[] = $pa['peso']; 
        }
        $conex->closePDO();
        return $peso;
    }
    
    public function cintura($a){
        $conex = new Conexion();
        $pdo = $conex->initPDO();
        $query = $pdo->prepare("SELECT cintura FROM datos WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        $c=$query->fetchAll();
        $cintura = array();
        foreach($c as $ca){
            $cintura[]=$ca['cintura'];
        }
        $conex->closePDO();
        return $cintura;
    }
    
    public function brazo($a){
        $conex = new Conexion();
        $pdo = $conex->initPDO();
        $query = $pdo->prepare("SELECT brazo FROM datos WHERE dni = ?");
        $query->bindValue(1, $a);
        $query->execute();
        $b=$query->fetchAll();
        $brazo = array();
        foreach($b as $ba){
            $brazo[]=$ba['brazo'];
        }
        $conex->closePDO();
        return $brazo;
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