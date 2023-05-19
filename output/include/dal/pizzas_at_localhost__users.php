<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableusers["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTableusers["celular"] = array("type"=>200,"varname"=>"celular", "name" => "celular");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusers["email_verified_at"] = array("type"=>135,"varname"=>"email_verified_at", "name" => "email_verified_at");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusers["remember_token"] = array("type"=>200,"varname"=>"remember_token", "name" => "remember_token");
$dalTableusers["empresa_id"] = array("type"=>20,"varname"=>"empresa_id", "name" => "empresa_id");
$dalTableusers["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");
$dalTableusers["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at");
	$dalTableusers["id"]["key"]=true;

$dal_info["pizzas_at_localhost__users"] = &$dalTableusers;
?>