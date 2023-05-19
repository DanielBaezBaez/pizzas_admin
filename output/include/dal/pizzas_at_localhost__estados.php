<?php
$dalTableestados = array();
$dalTableestados["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableestados["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTableestados["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTableestados["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTableestados["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTableestados["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTableestados["id"]["key"]=true;

$dal_info["pizzas_at_localhost__estados"] = &$dalTableestados;
?>