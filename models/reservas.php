<?php
require_once ("db.php");

class Reserva {
    
    private $id, $rut, $nombre, $fh_hr;

    public function __construct($id=null, $rut=null, $nombre=null, $fh_hr=null)
    {
        $this->id = $id;
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->fh_hr = $fh_hr;

    }

    public function setId($id){$this->id=$id;}
    public function setRut($rut){$this->rut=$rut;}
    public function setNombre($nombre){$this->nombre=$nombre;}
    public function setFecha($fecha){$this->fh_hr = $fecha;}

    public function getId(){return $this->id;}
    public function getRut(){return $this->rut;}
    public function getNombre(){return $this->nombre;}
    public function getFecha(){return $this->fh_hr;}

    public function crear(){
        $db = new DB();
        $query = "INSERT INTO reservas(rut, nombre, fechaHora) VALUES (?,?,NOW())";
        $sentencia = $db->getConexion()->prepare($query);
        $sentencia->bindParam(1, $this->getRut());
        $sentencia->bindParam(2, $this->getNombre());
        return $sentencia->execute();
    }
}
?>