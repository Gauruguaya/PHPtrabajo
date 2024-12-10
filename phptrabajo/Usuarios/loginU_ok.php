<?php
include_once "../Usuarios/usuariosDAO.php";
include_once "../Usuarios/Usuario.php";

$objUsuario = new Usuario();
$objUsuario->setContrasenaUsuario($_POST["contrasenaUsuario"]);
$objUsuario->setEmailUsuario($_POST["emailUsuario"]);

$objUsuarioDAO = new usuariosDAO();
$retorno = $objUsuarioDAO->login($objUsuario);

if ($retorno == 0) {
    header("location:loginU.php?errorEmail");
} else if ($retorno == 1) {
    header("location:loginU.php?errorContrasena");
} else {
    session_start();
    $_SESSION['usuarioId'] = $retorno["usuarioId"];
    $_SESSION['nombreUsuario'] = $retorno["nombreUsuario"];
    $_SESSION['tipoUsuario'] = $retorno["tipoUsuario"];
    if ($_SESSION['tipoUsuario'] == 1) {
        header("location:../Paginas/menuAdministrador.php");
    } else {
        header("location:../Paginas/listarV.php");
    }
}
?>