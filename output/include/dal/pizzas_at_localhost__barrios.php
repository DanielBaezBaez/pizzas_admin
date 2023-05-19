<?php
$dalTablebarrios = array();
$dalTablebarrios["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablebarrios["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTablebarrios["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablebarrios["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablebarrios["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablebarrios["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablebarrios["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablebarrios["id"]["key"]=true;

$dal_info["pizzas_at_localhost__barrios"] = &$dalTablebarrios;
?>