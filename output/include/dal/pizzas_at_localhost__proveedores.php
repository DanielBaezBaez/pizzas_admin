<?php
$dalTableproveedores = array();
$dalTableproveedores["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableproveedores["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTableproveedores["persona_id"] = array("type"=>20,"varname"=>"persona_id", "name" => "persona_id");
$dalTableproveedores["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTableproveedores["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTableproveedores["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTableproveedores["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTableproveedores["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTableproveedores["id"]["key"]=true;

$dal_info["pizzas_at_localhost__proveedores"] = &$dalTableproveedores;
?>