<?php
require_once("modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
       $this->model = new Modelo();
    }
    //mostrar
   static function  index(){
        $alumno = new Modelo();
        $dato      =    $alumno->mostrar("alumnos","1");
        require_once("vista/index.php");
    }
    static function  nuevo(){
        require_once("vista/nuevo.php");
    }
    static function  guardar(){
       $nombre = $_REQUEST['nombre'];
       $apellido= $_REQUEST['apellido'];
       $direccion= $_REQUEST['direccion'];
       $telefono= $_REQUEST['telefono'];
       $oficina= $_REQUEST['oficina'];
       $data = "'".$nombre."',".$apellido."',".$direccion."',".$telefono."',".$oficina;
       $alumno = new Modelo();
       $data=$alumno->insertar("alumnos",$data);
       header("location:".urlsite);
    }
    static function  editar(){
        $id=$_REQUEST['id'];
        $alumno = new Modelo();
        $dato = $alumno->mostrar("alumnos","id=".$id);
        require_once("vista/editar.php");

    }
    static function  actualizar(){
        $id=$_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio= $_REQUEST['precio'];
        $data = "nombre='".$nombre."',precio=".$precio;
        $alumno = new Modelo();
        $data=$alumno->actualizar("alumnos",$data,"id=".$id);
        header("location:".urlsite);
    }

    static function  eliminar(){
        $id=$_REQUEST['id'];
        $alumno = new Modelo();
        $dato = $alumno->eliminar("alumnos","id=".$id);
        require_once("vista/editar.php");
        header("location:".urlsite);
    }








}