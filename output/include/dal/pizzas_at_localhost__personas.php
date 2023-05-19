<?php
$dalTablepersonas = array();
$dalTablepersonas["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablepersonas["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTablepersonas["apellido"] = array("type"=>200,"varname"=>"apellido", "name" => "apellido");
$dalTablepersonas["celular"] = array("type"=>200,"varname"=>"celular", "name" => "celular");
$dalTablepersonas["cedula"] = array("type"=>200,"varname"=>"cedula", "name" => "cedula");
$dalTablepersonas["direccion"] = array("type"=>200,"varname"=>"direccion", "name" => "direccion");
$dalTablepersonas["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablepersonas["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablepersonas["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablepersonas["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablepersonas["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablepersonas["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablepersonas["id"]["key"]=true;

$dal_info["pizzas_at_localhost__personas"] = &$dalTablepersonas;
?>