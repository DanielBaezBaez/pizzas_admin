<?php
$dalTablepedidos = array();
$dalTablepedidos["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablepedidos["fecha"] = array("type"=>135,"varname"=>"fecha", "name" => "fecha");
$dalTablepedidos["latitud"] = array("type"=>5,"varname"=>"latitud", "name" => "latitud");
$dalTablepedidos["longitud"] = array("type"=>5,"varname"=>"longitud", "name" => "longitud");
$dalTablepedidos["delivery"] = array("type"=>200,"varname"=>"delivery", "name" => "delivery");
$dalTablepedidos["total"] = array("type"=>3,"varname"=>"total", "name" => "total");
$dalTablepedidos["estado_id"] = array("type"=>20,"varname"=>"estado_id", "name" => "estado_id");
$dalTablepedidos["plataforma"] = array("type"=>200,"varname"=>"plataforma", "name" => "plataforma");
$dalTablepedidos["observacion"] = array("type"=>200,"varname"=>"observacion", "name" => "observacion");
$dalTablepedidos["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablepedidos["user_id"] = array("type"=>20,"varname"=>"user_id", "name" => "user_id");
$dalTablepedidos["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablepedidos["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablepedidos["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablepedidos["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablepedidos["id"]["key"]=true;

$dal_info["pizzas_at_localhost__pedidos"] = &$dalTablepedidos;
?>