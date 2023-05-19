<?php
$dalTablefacturas = array();
$dalTablefacturas["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablefacturas["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablefacturas["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablefacturas["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablefacturas["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablefacturas["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablefacturas["id"]["key"]=true;

$dal_info["pizzas_at_localhost__facturas"] = &$dalTablefacturas;
?>