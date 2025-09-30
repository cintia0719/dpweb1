<?php
require_once("../library/conexion.php");
class ProductsModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function registrar($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $fecha_vencimiento, $imagen, $id_proveedor, $rol, $password)
    {
        $consulta = "INSERT INTO persona ($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $fecha_vencimiento, $imagen, $id_proveedor, $rol, password) VALUES('$codigo', '$nombre', '$detalle', '$precio', '$stock', '$id_categoria', '$fecha_vencimiento', '$imagen', '$id_proveedor', '$rol', '$password')";
        $sql = $this->conexion->query($consulta);
        if ($sql) {
            $sql = $this->conexion->insert_id;
        } else {
            $sql = 0;
        }
        return $sql;
    }
    public function existePersona($nro_identidad)
    {
        $consulta = "SELECT * FROM persona WHERE nro_identidad = '$nro_identidad'";
        $sql = $this->conexion->query($consulta);
        return $sql->num_rows;
    }
    public function buscarPersonaPorNroIdenidad($nro_identidad)
    {

        $consulta = "SELECT id, razon_social, password FROM persona WHERE nro_identidad = '$nro_identidad'limit 1";
        $sql = $this->conexion->query($consulta);
        return $sql->fetch_object();
    }
    public function verUsuarios()
    {
        $arr_usuario = array();
        $consulta = "SELECT * FROM persona";
        $sql = $this->conexion->query($consulta);
        while ($objeto = $sql->fetch_object()) {
            array_push($arr_usuario, $objeto);
        }
        return $arr_usuario;
    }

    public function ver($id)
    {
        $consulta = "SELECT * FROM persona WHERE id='$id'";
        $sql = $this->conexion->query($consulta);
        return $sql->fetch_object();
    }

    public function actualizar($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $fecha_vencimiento, $imagen, $id_proveedor, $rol)
    {
        $consulta = "UPDATE persona SET codigo='$codigo', nombre='$nombre', detalle='$detalle', precio='$precio',stock='$stock', id_categoria='$id_categoria', fecha_vencimiento='$fecha_vencimiento', imagen='$imagen', id_proveedor='$id_proveedor', rol='$rol' WHERE codigo='$codigo'";
        $sql = $this->conexion->query($consulta);
        return $sql;
    }


    //Eliminar
    public function eliminar($id){
    $consulta = "DELETE FROM persona WHERE id='$id'";
    $sql = $this->conexion->query($consulta);
    return $sql;
    }
}