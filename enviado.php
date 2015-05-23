<?php
if($_POST["nombre"] && $_POST["email"] && $_POST["consulta"] != ""){
	$de = $_POST["nombre"];
	$destino = "info@pestrebol.com.ar";
	$asunto = "Consulta via web";
	$mensaje .= "FORMULARIO."."\n";
	$mensaje .= "\n";
	$mensaje .= "NOMBRE: " . utf8_decode($_POST["nombre"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";
	$mensaje .= "\n";
	$mensaje .= "Consulta: " . utf8_decode($_POST["consulta"]) ."\n";
    $emailheader = "From: Tree Consulta <info@pestrebol.com.ar>\r\n";
mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");
	} else {
    if($_POST["nombre"] == ""){
    echo utf8_encode ('Por favor, indica tu nombre.');
    exit; }
    if($_POST["email"] == ""){
    echo utf8_encode ('Por favor, indica un email de contacto.');
    exit; }
    if($_POST["consulta"] == ""){
    echo utf8_encode ('Por favor, indica tu consulta.');
    exit; }
}
?>