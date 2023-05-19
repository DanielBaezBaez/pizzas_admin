<?php
$dalTabledetalles_pedidos = array();
$dalTabledetalles_pedidos["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTabledetalles_pedidos["cantidad"] = array("type"=>3,"varname"=>"cantidad", "name" => "cantidad");
$dalTabledetalles_pedidos["costo"] = array("type"=>3,"varname"=>"costo", "name" => "costo");
$dalTabledetalles_pedidos["pedido_id"] = array("type"=>20,"varname"=>"pedido_id", "name" => "pedido_id");
$dalTabledetalles_pedidos["item_id"] = array("type"=>20,"varname"=>"item_id", "name" => "item_id");
$dalTabledetalles_pedidos["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTabledetalles_pedidos["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTabledetalles_pedidos["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTabledetalles_pedidos["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTabledetalles_pedidos["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTabledetalles_pedidos["id"]["key"]=true;

$dal_info["pizzas_at_localhost__detalles_pedidos"] = &$dalTabledetalles_pedidos;
?>