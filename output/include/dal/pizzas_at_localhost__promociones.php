<?php
$dalTablepromociones = array();
$dalTablepromociones["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablepromociones["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablepromociones["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTablepromociones["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablepromociones["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablepromociones["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablepromociones["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablepromociones["id"]["key"]=true;

$dal_info["pizzas_at_localhost__promociones"] = &$dalTablepromociones;
?>