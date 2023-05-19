<?php
$dalTablepassword_resets = array();
$dalTablepassword_resets["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablepassword_resets["token"] = array("type"=>200,"varname"=>"token", "name" => "token");
$dalTablepassword_resets["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");

$dal_info["pizzas_at_localhost__password_resets"] = &$dalTablepassword_resets;
?>