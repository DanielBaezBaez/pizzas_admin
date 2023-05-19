<?php
$dalTabletipo_personales = array();
$dalTabletipo_personales["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTabletipo_personales["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTabletipo_personales["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTabletipo_personales["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTabletipo_personales["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTabletipo_personales["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTabletipo_personales["id"]["key"]=true;

$dal_info["pizzas_at_localhost__tipo_personales"] = &$dalTabletipo_personales;
?>