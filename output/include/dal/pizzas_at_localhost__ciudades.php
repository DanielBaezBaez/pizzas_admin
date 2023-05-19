<?php
$dalTableciudades = array();
$dalTableciudades["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableciudades["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTableciudades["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTableciudades["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTableciudades["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTableciudades["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTableciudades["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTableciudades["id"]["key"]=true;

$dal_info["pizzas_at_localhost__ciudades"] = &$dalTableciudades;
?>