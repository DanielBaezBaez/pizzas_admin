<?php
$dalTabletipo_items = array();
$dalTabletipo_items["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTabletipo_items["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTabletipo_items["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTabletipo_items["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTabletipo_items["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTabletipo_items["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTabletipo_items["id"]["key"]=true;

$dal_info["pizzas_at_localhost__tipo_items"] = &$dalTabletipo_items;
?>