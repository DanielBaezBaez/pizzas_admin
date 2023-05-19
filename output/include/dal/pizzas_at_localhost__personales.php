<?php
$dalTablepersonales = array();
$dalTablepersonales["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablepersonales["persona_id"] = array("type"=>20,"varname"=>"persona_id", "name" => "persona_id");
$dalTablepersonales["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablepersonales["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablepersonales["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablepersonales["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablepersonales["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablepersonales["id"]["key"]=true;

$dal_info["pizzas_at_localhost__personales"] = &$dalTablepersonales;
?>