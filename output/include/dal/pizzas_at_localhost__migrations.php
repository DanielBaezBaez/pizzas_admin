<?php
$dalTablemigrations = array();
$dalTablemigrations["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablemigrations["migration"] = array("type"=>200,"varname"=>"migration", "name" => "migration");
$dalTablemigrations["batch"] = array("type"=>3,"varname"=>"batch", "name" => "batch");
	$dalTablemigrations["id"]["key"]=true;

$dal_info["pizzas_at_localhost__migrations"] = &$dalTablemigrations;
?>