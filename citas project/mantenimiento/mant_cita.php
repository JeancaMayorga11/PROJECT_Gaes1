<?php
class Cita{
    public $idcita;
    public $f_mant;
    public $h_mant;


    // Método constructor para inicializar los atributos.
    public function __construct(){
        $this->idcita = "";
        $this->f_mant = "";
        $this->h_mant = "";
    }
    // Función para crear cliente.
    public function crearCita($idcita, $f_mant, $h_mant){
        $this->idcita = $idcita;
        $this->f_mant = $f_mant;
        $this->h_mant = $h_mant;


        return [$this->f_mant, $this->h_mant];
    }
    // Función para consultar datos de la cita.
    public function consultarDatos($idcita){
        if($this->validarDatos($idcita)){
            echo "<br>ID de la cita: ".$this->idcita;
            echo "<br>Fecha de mantenimiento: ".$this->f_mant;
            echo "<br>Hora de la visita: ".$this->h_mant; 
        }
    }
    // Función para validar datos.
    public function validarDatos($idcita){
            if($idcita == $this->$idcita){
                return true;
            }else{
                echo "<br>Datos incorrectos!";
                return false;
            }
    }
    // Función para actualizar datos.
    function ActualizarDatos($h_mant, $f_mant, $idcita){
        if($this->validarDatos($idcita)){
            $this->$f_mant = $f_mant;
            $this->$h_mant = $h_mant;
            echo "<br>Datos de la cita actualizados correctamente";
            return [$f_mant, $h_mant];
        }else{
            echo "<br> la cita ingresada es incorrecta";
        }
    }  
}
$appo = new Cita();

?>                echo "<br>Datos incorrectos!";
                return false;
            
    // Función para actualizar datos.
    function updateDatos($h_mant, $f_mant){
        if($this->validarDatos($f_mant)){
            $this->$h_mant = $h_mant;
            echo "<br>Datos actualizados correctamente";
            return [$h_mant];
        }else{
            echo "<br> la cita ingresada es incorrecta";
        }
    }  

$cl = new Cliente();

?>