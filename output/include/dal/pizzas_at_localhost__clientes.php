<?php
$dalTableclientes = array();
$dalTableclientes["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableclientes["persona_id"] = array("type"=>20,"varname"=>"persona_id", "name" => "persona_id");
$dalTableclientes["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTableclientes["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTableclientes["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTableclientes["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTableclientes["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTableclientes["id"]["key"]=true;

$dal_info["pizzas_at_localhost__clientes"] = &$dalTableclientes;
?>