<?php
$dalTableempresas = array();
$dalTableempresas["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableempresas["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTableempresas["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTableempresas["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
$dalTableempresas["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTableempresas["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
	$dalTableempresas["id"]["key"]=true;

$dal_info["pizzas_at_localhost__empresas"] = &$dalTableempresas;
?>