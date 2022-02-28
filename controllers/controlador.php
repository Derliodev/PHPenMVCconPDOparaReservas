<?php

require_once ('models/reservas.php');

class ReservaControlador{
    public $reserva;
    function __construct()
    {
        $this->reserva = new Reserva();
    }
    public function crear(){
        
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'views/sections/header.php';
            include 'views/formulario.php';
            include 'views/sections/footer.php';
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->reserva->setRut($_POST['Rut']);
            $this->reserva->setNombre($_POST['Nombre']);
            if($this->reserva->crear()){
                include 'views/sections/header.php';
                echo "<div style='margin-top: 300px; line-height: 95%'><h1>Reserva ingresada correctamente</h1><br>";
                echo "<a style='font-size:32px; text-decoration: none; color:red;' href='index.php'><strong>Volver</strong></a></div>";
                include 'views/sections/footer.php';
            }
            else{
                echo "No se pudo realizar la reserva <br>";
                echo "<a href='index.php'>Volver</a>";
                include 'views/sections/footer.php';
            }
        }
    }  
}
?>