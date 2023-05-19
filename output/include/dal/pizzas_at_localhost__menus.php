<?php
$dalTablemenus = array();
$dalTablemenus["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablemenus["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTablemenus["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTablemenus["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTablemenus["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTablemenus["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTablemenus["id"]["key"]=true;

$dal_info["pizzas_at_localhost__menus"] = &$dalTablemenus;
?>