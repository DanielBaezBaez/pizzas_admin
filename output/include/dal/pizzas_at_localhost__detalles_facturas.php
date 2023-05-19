<?php
$dalTabledetalles_facturas = array();
$dalTabledetalles_facturas["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTabledetalles_facturas["factura_id"] = array("type"=>20,"varname"=>"factura_id", "name" => "factura_id");
$dalTabledetalles_facturas["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTabledetalles_facturas["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTabledetalles_facturas["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTabledetalles_facturas["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTabledetalles_facturas["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTabledetalles_facturas["id"]["key"]=true;

$dal_info["pizzas_at_localhost__detalles_facturas"] = &$dalTabledetalles_facturas;
?>