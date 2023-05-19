<?php
$dalTableinsumos = array();
$dalTableinsumos["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableinsumos["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTableinsumos["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTableinsumos["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTableinsumos["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTableinsumos["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTableinsumos["id"]["key"]=true;

$dal_info["pizzas_at_localhost__insumos"] = &$dalTableinsumos;
?>