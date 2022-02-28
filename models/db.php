<?php

class DB
{
    private $conexion;
    
    function __construct()
    {
            try {
                $this->conexion = new PDO('mysql:host=localhost;dbname=bdreservoir', 'root', '');
            }
            catch(PDOException $e){
                //$this->conexion = null;
                //$e->getMessage();
            }
        }
        public function getConexion(){
            return $this->conexion;
        }
}
?>