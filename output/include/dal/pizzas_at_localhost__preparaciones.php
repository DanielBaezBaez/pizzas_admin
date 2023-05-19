<?php
$dalTablepreparaciones = array();
$dalTablepreparaciones["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablepreparaciones["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablepreparaciones["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablepreparaciones["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablepreparaciones["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablepreparaciones["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablepreparaciones["id"]["key"]=true;

$dal_info["pizzas_at_localhost__preparaciones"] = &$dalTablepreparaciones;
?>