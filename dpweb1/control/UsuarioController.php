<?php
require_once("../model/UsuarioModel.php");
$objPersona = new UsuarioModel();

$tipo = $_GET['tipo'];
if ($tipo == "registrar") {
    //print_r($_POST);
    $nro_identidad = $_POST['nro_identidad'];
    $razon_social = $_POST['razon_social'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $cod_postal = $_POST['cod_postal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    //ENCRIPTANDO NRO_IDENTIDAD(DNI) PARA UTILIZARLO COMO PSSWORD
    $password = password_hash($nro_identidad, PASSWORD_DEFAULT);

    if ($nro_identidad == "" || $razon_social == "" || $telefono == "" || $correo == "" || $departamento == "" || $provincia == "" || $distrito == "" || $cod_postal == "" || $direccion == "" || $rol == "") {
        $arrResponse = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        //validacion si existe persona con el mismo dni
        $existePersona = $objPersona->existePersona($nro_identidad);
        if ($existePersona > 0) {
            $arrResponse = array('status' => false, 'msg' => 'Error,nro de documento ya existe');
        } else {
            $arrResponse = array('status' => true, 'msg' => 'registro exitoso');

            $respuesta = $objPersona->registrar($nro_identidad, $razon_social, $telefono,  $correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $password);
            if ($respuesta) {
                $arrResponse = array('status' => true, 'msg' => 'Registrado Exitosamente');
            } else {
                $arrResponse = array('status' => false, 'msg' => 'Error, Falló en el registro');
            }
        }
    }
    echo json_encode($arrResponse);
}
if ($tipo == "iniciar_sesion") {
    $nro_identidad = $_POST['username'];
    $password = $_POST['password'];
    if ($nro_identidad == "" || $password == "") {
        $respuesta = array('status' => false, 'msg' => 'Error, campos vacios');
    } else {
        $existePersona = $objPersona->existePersona($nro_identidad);
        if (!$existePersona) {
            $respuesta = array('status' => false, 'msg' => 'Error, usuario no registrado');
        } else {
            $persona = $objPersona->buscarPersonaPorNroIdenidad($nro_identidad);
            
            if (password_verify($password, $persona->password)) {
                session_start();
                $_SESSION['ventas_id'] = $persona->id;
                $_SESSION['ventas_usuario'] = $persona->razon_social;
                $respuesta = array('status' => true, 'msg' => 'OK');
            } else {
                $respuesta = array('status' => false, 'msg' => 'credenciales incorrectos');
            }
        }
    }
    echo json_encode($respuesta);
}
if ($tipo == "ver_usuarios"){
    $usuario = $objPersona->verUsuarios();
    header('content-type:application/json');
    echo json_encode($usuario);

}