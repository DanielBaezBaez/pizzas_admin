<?php
$dalTablepaises = array();
$dalTablepaises["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablepaises["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTablepaises["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablepaises["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablepaises["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablepaises["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablepaises["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablepaises["id"]["key"]=true;

$dal_info["pizzas_at_localhost__paises"] = &$dalTablepaises;
?>