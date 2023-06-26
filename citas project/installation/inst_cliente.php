<?php
class Cliente{
    public $nombre;
    public $email;
    public $identificacion;
    public $celular;
    public $direccion;
    public $ciudad;

    // Método constructor para inicializar los atributos.
    public function __construct(){
        $this->nombre = "";
        $this->email = "";
        $this->identificacion = null;
        $this->celular = null;
        $this->direccion = null;
        $this->ciudad = null;
    }
    // Función para crear cliente.
    public function crearCliente($nombre, $email, $identificacion, $celular, $direccion, $ciudad){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->identificacion = $identificacion;
        $this->celular = $celular;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;

        return [$this->nombre, $this->identificacion];
    }
    // Función para consultar datos del cliente.
    public function consultarDatos($identificacion){
        if($this->validarDatos($identificacion)){
            echo "<br>Nombre: ".$this->nombre;
            echo "<br>Correo electrónico: ".$this->email;
            echo "<br>N° Documento: ".$this->identificacion;
            echo "<br>Número de celular: ".$this->celular;
            echo "<br>Dirección de residencia: ".$this->direccion;      
            echo "<br>Ciudad de residencia: ".$this->ciudad;   
        }
    }
    // Función para validar datos.
    public function validarDatos($identificacion){
            if($identificacion == $this->identificacion){
                return true;
            }else{
                echo "<br>Datos incorrectos!";
                return false;
            }
    }
    // Función para actualizar datos.
    function ActualizarDatos($nombre, $email, $celular, $identificacion){
        if($this->validarDatos($identificacion)){
            $this->$nombre = $nombre;
            $this->$email = $email;
            $this->$celular = $celular;
            echo "<br>Datos actualizados correctamente";
            return [$nombre, $email, $celular];
        }else{
            echo "<br>El documento ingresado es incorrecto";
        }
    }  
}
$cl = new Cliente();

?>