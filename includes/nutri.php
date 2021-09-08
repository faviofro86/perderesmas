<?php
include_once('conexion.php');

class Nutricionista{
    
    public function datos($doc){
        global $pdo;
        
        $query = $pdo->prepare("SELECT n.id as idn, n.telefono as telefono, n.email as email FROM nutricionista n JOIN registros r ON r.nutricionista = n.id WHERE r.dni = ?");
        $query->bindValue(1, $doc);
        $query->execute();
        return $query->fetch();
    }
    
}

?>