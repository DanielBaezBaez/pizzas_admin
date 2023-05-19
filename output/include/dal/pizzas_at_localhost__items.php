<?php
$dalTableitems = array();
$dalTableitems["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableitems["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
$dalTableitems["ingredientes_principales"] = array("type"=>200,"varname"=>"ingredientes_principales", "name" => "ingredientes_principales");
$dalTableitems["url_image"] = array("type"=>200,"varname"=>"url_image", "name" => "url_image");
$dalTableitems["costo"] = array("type"=>3,"varname"=>"costo", "name" => "costo");
$dalTableitems["detalle"] = array("type"=>200,"varname"=>"detalle", "name" => "detalle");
$dalTableitems["tipo_item_id"] = array("type"=>20,"varname"=>"tipo_item_id", "name" => "tipo_item_id");
$dalTableitems["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTableitems["creado_por"] = array("type"=>20,"varname"=>"creado_por", "name" => "creado_por");
$dalTableitems["actualizado_por"] = array("type"=>20,"varname"=>"actualizado_por", "name" => "actualizado_por");
$dalTableitems["creado"] = array("type"=>135,"varname"=>"creado", "name" => "creado");
$dalTableitems["actualizado"] = array("type"=>135,"varname"=>"actualizado", "name" => "actualizado");
	$dalTableitems["id"]["key"]=true;

$dal_info["pizzas_at_localhost__items"] = &$dalTableitems;
?>