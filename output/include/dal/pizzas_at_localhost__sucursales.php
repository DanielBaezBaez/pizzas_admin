<?php
$dalTablesucursales = array();
$dalTablesucursales["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablesucursales["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTablesucursales["telefono"] = array("type"=>200,"varname"=>"telefono", "name" => "telefono");
$dalTablesucursales["direccion"] = array("type"=>200,"varname"=>"direccion", "name" => "direccion");
$dalTablesucursales["correo"] = array("type"=>200,"varname"=>"correo", "name" => "correo");
$dalTablesucursales["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTablesucursales["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablesucursales["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablesucursales["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablesucursales["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablesucursales["id"]["key"]=true;

$dal_info["pizzas_at_localhost__sucursales"] = &$dalTablesucursales;
?>